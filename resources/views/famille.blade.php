@extends('layouts.app')

@section('title')
    Séjour famille
@endsection

@section('extra-css')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class='col-lg-6 col-md-8 col-10'>

            <form action="./inscription" method="POST" id='inscriptionForm'>
                @csrf
                {{-- Etape 1 (Info contact) --}}
                <fieldset class='step'>
                    <legend class="text-center fs-2">Séjour famille – 2022</legend>
                    <hr>
                    <div class="row g-3">
                        <input type="hidden" value="{{ $user->id }}" name="Inscription_User_ID">

                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Nom">Nom de famille<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Nom" id="Inscription_Nom"
                                placeholder="Nom de famille" required>
                        </div>

                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Prenom">Prénom<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Prenom" id="Inscription_Prenom"
                                placeholder="Prénom" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label class='form-label' for="Inscription_Adresse">Adresse<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Adresse" id="Inscription_Adresse"
                            placeholder="Adresse" required>
                    </div>

                    <div class="row g-3">

                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Ville">Ville<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Ville" id="Inscription_Ville"
                                placeholder="Ville" required>
                        </div>
                        <div class="col form-group">
                            <label class='form-label' for="Inscription_CP">Code postal<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_CP" id="Inscription_CP"
                                placeholder="Code postal" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label class='form-label' for="Inscription_Fixe">Téléphone fixe<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Fixe" id="Inscription_Fixe"
                            placeholder="Téléphone fixe" required>
                    </div>
                    <div class="form-group">
                        <label class='form-label' for="Inscription_Portable">Téléphone portable<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Portable" id="Inscription_Portable"
                            placeholder="Téléphone portable" required>
                    </div>


                    <div class="form-group">
                        <label class='form-label' for="Inscription_Email">Adresse mail<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Email" id="Inscription_Email"
                            placeholder="Adresse mail" required>
                    </div>

                </fieldset>
                {{-- Etape 2 (Choisissez votre séjour) --}}
                <fieldset class="step">
                    <legend class="text-center fs-2">Choisissez votre séjours</legend>
                    <div class="table-responsive">
                        <table class='table table-striped'>
                            <caption>Prix des séjours/préstations</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Prix semaine / prestations</th>
                                    <th scope="col">Demi-pension</th>
                                    <th scope="col">Pension complète</th>
                                    <th scope="col">Prix à la nuitée(+PDJ)</th>
                                    <th scope="col">Prix d'1 repas suppl.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Enfant de 3 ans et plus</th>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enfant de 4 à 11 ans</th>
                                    <td>{{ $pensionDemi->Prix_Enfant }} €</td>
                                    <td>{{ $pensionComplete->Prix_Enfant }} €</td>
                                    <td>{{ $pensionNuit->Prix_Enfant }} €</td>
                                    <td>{{ $pensionRepas->Prix_Enfant }} €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enfant de 12 à 16 ans</th>
                                    <td>{{ $pensionDemi->Prix_Ado }} €</td>
                                    <td>{{ $pensionComplete->Prix_Ado }} €</td>
                                    <td>{{ $pensionNuit->Prix_Ado }} €</td>
                                    <td>{{ $pensionRepas->Prix_Ado }} €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Adulte (à partir de 17 ans)</th>
                                    <td>{{ $pensionDemi->Prix_Adulte }} €</td>
                                    <td>{{ $pensionComplete->Prix_Adulte }} €</td>
                                    <td>{{ $pensionNuit->Prix_Adulte }} €</td>
                                    <td>{{ $pensionRepas->Prix_Adulte }} €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row border-bottom border-bottom-2 checkbox-group">
                        <span id='sejour' class="text-center fs-2">Veuillez choisir votre type de pension<span
                                class="text-danger">*</span></span>
                        <hr>
                        <div class="col border-end border-end-2">
                            <div class="row form-group">
                                <div class='col'>
                                    <label class='form-label' for="Inscription_Pension">Séjour semaine (du 30/07 au
                                        06/08)</label>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input pensionType" type="checkbox"
                                            name="Inscription_Pension" id="Inscription_Pension_Demi" value="Demi">
                                        <label class="form-check-label" for="Inscription_Pension_Demi">Demi-pension*</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input pensionType" type="checkbox"
                                            name="Inscription_Pension" id="Inscription_Pension_Complete" value="Complete">
                                        <label class="form-check-label" for="Inscription_Pension_Complete">Pension
                                            complète</label>
                                    </div>
                                </div>
                            </div>
                            <span class='text-secondary'>*La demi-pension comprend le PDJ et le repas du soir</span>
                        </div>
                        <div class="col">
                            <div class="row form-group">
                                <div class='col'>
                                    <label class='form-label' for="Inscription_Nuit[]">Séjour à la nuitée</label>
                                </div>
                                <div class='col'>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_07-27" value="07-27">
                                        <label class="form-check-label" for="Inscription_Nuit_07-27">27/07</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_07-28" value="07-28">
                                        <label class="form-check-label" for="Inscription_Nuit_07-28">28/07</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_07-29" value="07-29">
                                        <label class="form-check-label" for="Inscription_Nuit_07-29">29/07</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_07-30" value="07-27">
                                        <label class="form-check-label" for="Inscription_Nuit_07-30">30/07</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_07-31" value="07-31">
                                        <label class="form-check-label" for="Inscription_Nuit_07-31">31/07</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-01" value="08-01">
                                        <label class="form-check-label" for="Inscription_Nuit_08-01">01/08</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-02" value="08-02">
                                        <label class="form-check-label" for="Inscription_Nuit_08-02">02/08</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-03" value="08-03">
                                        <label class="form-check-label" for="Inscription_Nuit_08-03">03/08</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-04" value="08-04">
                                        <label class="form-check-label" for="Inscription_Nuit_08-04">04/08</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-05" value="08-05">
                                        <label class="form-check-label" for="Inscription_Nuit_08-05">05/08</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="Inscription_Nuit[]"
                                            id="Inscription_Nuit_08-06" value="08-06">
                                        <label class="form-check-label" for="Inscription_Nuit_08-06">06/08</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom border-bottom-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Service animation gratuit</li>
                            <li class="list-group-item text-center">Possibilité de prendre le repas du midi pour 9
                                €/adulte et 5 €/enfant (hors pension
                                complète)</li>
                            <li class="list-group-item text-center">Repas du midi au choix sous forme de pique-nique ou à
                                table</li>
                            <li class="list-group-item text-center">Possibilité de demander une navette pour faire
                                l’aller-retour Quimper-Ile Tudy (24 €)
                            </li>
                            <li class="list-group-item text-center">Possibilité de prolonger le séjour (avant ou après), ne
                                passer que quelques jours ou inviter
                                des amis en réservant les nuitées (ci-dessus – séjour à la carte) sous réserve des places
                                disponibles en sachent que les repas pris sur place (midi ou soir) seront facturés en fin de
                                séjour.</li>
                        </ul>
                    </div>
                </fieldset>
                {{-- Etape 3 (Calcul du montant du séjour) --}}
                <fieldset class="step">
                    <legend class="text-center fs-2">Calcul du montant du séjour</legend>
                    <div class="table-responsive">

                        <table id='Demi' class='table table-bordered'>
                            <caption>Tableau de calcul du montant du séjour à la semaine</caption>
                            <thead>
                                <th scope="col" colspan="5" class='text-center'>Séjour semaine</th>
                            </thead>
                            <thead>
                                <th scope="col" colspan='2'>Nombre de participants<span class="text-danger">*</span></th>
                                <th scope="col" colspan='2'>Prix formule</th>
                                <th scope="col">Montant</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Adulte</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Semaine_Demi_Adulte_nb'
                                            name='Inscription_Semaine_Demi_Adulte_nb'></td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionDemi->Prix_Adulte }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Ados 12 à 16 ans</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Semaine_Demi_Ado_nb'
                                            name='Inscription_Semaine_Demi_Ado_nb'>
                                    </td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionDemi->Prix_Ado }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<12 ans)</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Semaine_Demi_Enfant_12_nb'
                                            name='Inscription_Semaine_Demi_Enfant_12_nb'></td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionDemi->Prix_Enfant }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<3 ans)</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Semaine_Demi_Enfant_3_nb'
                                            name='Inscription_Semaine_Demi_Enfant_3_nb'></td>
                                    <th colspan="2" class="text-center">GRATUIT</th>
                                    <td>= 0 €</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="text-end">Total A :</th>
                                    <th class="sum"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id='Complete' class='table table-bordered'>
                            <caption>Tableau de calcul du montant du séjour à la semaine</caption>
                            <thead>
                                <th scope="col" colspan="5" class='text-center'>Séjour semaine</th>
                            </thead>
                            <thead>
                                <th scope="col" colspan='2'>Nombre de participants<span class="text-danger">*</span></th>
                                <th scope="col" colspan='2'>Prix formule</th>
                                <th scope="col">Montant</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Adulte</th>
                                    <td class='nbPers'><input type='number' min=0
                                            id='Inscription_Semaine_Complete_Adulte_nb'
                                            name='Inscription_Semaine_Complete_Adulte_nb'></td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionComplete->Prix_Adulte }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Ados 12 à 16 ans</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Semaine_Complete_Ado_nb'
                                            name='Inscription_Semaine_Complete_Ado_nb'>
                                    </td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionComplete->Prix_Ado }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<12 ans)</th>
                                    <td class='nbPers'><input type='number' min=0
                                            id='Inscription_Semaine_Complete_Enfant_12_nb'
                                            name='Inscription_Semaine_Complete_Enfant_12_nb'></td>
                                    <th>X</th>
                                    <td class='price'>{{ $pensionComplete->Prix_Enfant }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<3 ans)</th>
                                    <td class='nbPers'><input type='number' min=0
                                            id='Inscription_Semaine_Complete_Enfant_3_nb'
                                            name='Inscription_Semaine_Complete_Enfant_3_nb'></td>
                                    <th colspan="2" class="text-center">GRATUIT</th>
                                    <td>= 0 €</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="text-end">Total A :</th>
                                    <th class="sum"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id='Nuit' class='table table-bordered'>
                            <caption>Tableau de calcul du montant du séjour à la nuitée</caption>
                            <thead>
                                <th scope="col" colspan="6" class='text-center'>Séjour à la carte(en fonction du nombre de
                                    nuitée)</th>
                            </thead>
                            <thead>
                                <th scope="col" colspan='2'>Nombre de participants<span class="text-danger">*</span>
                                </th>
                                <th scope="col" colspan='2'>Nombre de nuitées</th>
                                <th scope="col">Prix nuitée</th>
                                <th scope="col">Montant</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Adulte</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Nuit_Adulte_nb'
                                            name='Inscription_Nuit_Adulte_nb'></td>
                                    <th>X</th>
                                    <td class='nbNuits'><input type='number' min=0 id='Inscription_Nuit_Adulte_nbNuits'
                                            name='Inscription_Nuit_Adulte_nbNuits'></td>
                                    <td class='price'>{{ $pensionNuit->Prix_Adulte }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Ados 12 à 16 ans</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Nuit_Ado_nb'
                                            name='Inscription_Nuit_Ado_nb'>
                                    </td>
                                    <th>X</th>
                                    <td class='nbNuits'><input type='number' min=0 id='Inscription_Nuit_Ado_nbNuits'
                                            name='Inscription_Nuit_Ado_nbNuits'></td>
                                    <td class='price'>{{ $pensionNuit->Prix_Ado }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<12 ans)</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Nuit_Enfant_12_nb'
                                            name='Inscription_Nuit_Enfant_12_nb'></td>
                                    <th>X</th>
                                    <td class='nbNuits'><input type='number' min=0 id='Inscription_Nuit_Enfant_12_nbNuits'
                                            name='Inscription_Nuit_Enfant_12_nbNuits'></td>
                                    <td class='price'>{{ $pensionNuit->Prix_Enfant }}</td>
                                    <td class="dynamicPrice">= 0 €</td>
                                </tr>
                                <tr>
                                    <th>Enfant (<3 ans)</th>
                                    <td class='nbPers'><input type='number' min=0 id='Inscription_Nuit_Enfant_3_nb'
                                            name='Inscription_Nuit_Enfant_3_nb'></td>
                                    <th>X</th>
                                    <td class='nbNuits'><input type='number' min=0 id='Inscription_Nuit_Enfant_3_nbNuits'
                                            name='Inscription_Nuit_Enfant_3_nbNuits'></td>
                                    <th class="text-center">GRATUIT</th>
                                    <td>= 0 €</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-end">Total B :</th>
                                    <th class="sum"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row mt-2">
                        <h3 class='text-end fs-2'>Total : <span id="total"></span> €</h3>
                    </div>
                    <input type="hidden" name="Inscription_Montant_A">
                    <input type="hidden" name="Inscription_Montant_B">
                    <input type="hidden" name="Inscription_Montant_Total">
                </fieldset>

                <div class="row justify-content-between my-3">
                    <div class="col-lg-2 col-md-3 col-4 text-center">
                        <button type="button" class='btn btn-primary ' id="prevBtn"
                            onclick="nextPrev(-1)">Précédent</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 text-center">
                        <button type="button" class='btn btn-primary' id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extra-js')
    {{-- Bootstrap datepicker --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script>
    {{-- custom Js --}}
    <script src="./assets/js/formFamilleHandler.js"></script>
@endsection
