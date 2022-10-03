@extends('layouts.app')

@section('title')
    Séjour enfant
@endsection

@section('extra-css')
    {{-- Bootstrap Datepicker --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"
        integrity="sha512-Fppbdpv9QhevzDE+UHmdxL4HoW8HantO+rC8oQB2hCofV+dWV2hePnP5SgiWR1Y1vbJeYONZfzQc5iII6sID2Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-pincode-input.css') }}">
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class='col-lg-6 col-md-8 col-10'>

            <form action="{{ route('enfant.store') }}" method="POST" id='inscriptionForm'>
                @csrf
                <input type='hidden' name='Inscription_User_ID' value='{{ $user->id }}'>
                {{-- Etape 1 (Info sur l'enfant) --}}
                <fieldset class='step'>
                    <legend class='text-center fs-2'>Info sur l'enfant</legend>
                    <hr>
                    <p>Toute inscription d’un ado sera désormais couplée d’un entretien avant départ pour s’assurer
                        qu’il
                        soit bien informé du séjour qu’il vivra (activités, règlement, conditions d’accueil, etc.).
                        Cela lui
                        permettrait de mieux s’approprier le séjour sur place et de vivre une belle expérience</p>
                    <hr>
                    <div class="row g-3">

                        <div class="col">
                            <label class='form-label' for="Inscription_Nom">Nom de famille<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Nom" id="Inscription_Nom"
                                placeholder="Nom de famille" required>
                        </div>
                        <div class="col">
                            <label class='form-label' for="Inscription_Prenom">Prénom<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Prenom" id="Inscription_Prenom"
                                placeholder="Prénom" required>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class='form-label' for="Inscription_Date_Naissance">Date de naissance<span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="date" id="Inscription_Date_Naissance"
                                    placeholder="jj-mm-yyyy" name="Inscription_Date_Naissance" required>
                            </div>
                        </div>
                        <div class="col align-self-center">
                            <div class="row form-group">
                                <div class="col align-self-center">
                                    <label class='form-label' for="Inscription_Sexe">Sexe<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="col sexlabel">
                                    <div class="row">
                                        <div class="form-check">
                                            <label class="form-check-label" for="Inscription_Sexe1">
                                                Garçon
                                            </label>
                                            <input class="form-check-input" type="radio" name="Inscription_Sexe"
                                                id="Inscription_Sexe1" value='garcon' required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-check">
                                            <label class="form-check-label" for="Inscription_Sexe2">
                                                Fille
                                            </label>
                                            <input class="form-check-input" type="radio" name="Inscription_Sexe"
                                                id="Inscription_Sexe2" value='fille' required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 form-group">
                        <div class="col">

                            <label class='form-label' for="Inscription_Adresse">Adresse<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Adresse" id="Inscription_Adresse"
                                placeholder="Adresse" required>
                        </div>
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
                    <hr>
                    <div class="row form-group">
                        <div class="col align-self-center">
                            <label class='form-label' for="Inscription_Experience">Première expérience en centre
                                de vacances ?<span class="text-danger">*</span></label>
                        </div>
                        <div class="col align-items-center">
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Experience1">
                                        Oui
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Experience"
                                        id="Inscription_Experience1" value='oui' required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Experience2">
                                        Non
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Experience"
                                        id="Inscription_Experience2" value='non' required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row form-group">
                        <div class="col align-self-center">
                            <label class='form-label align-items-center' for="Inscription_Venu">Déjà venu à
                                BERRY-TUDY ?<span class="text-danger">*</span></label>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Venu1">
                                        Oui
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Venu"
                                        id="Inscription_Venu1" value='oui' required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Venu2">
                                        Non
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Venu"
                                        id="Inscription_Venu2" value='non' required>
                                </div>
                            </div>
                        </div>
                    </div>

                </fieldset>
                {{-- Etape 2 (Situation de l'enfant) --}}
                <fieldset class="step">
                    <legend class='text-center fs-2'>Situation de l'enfant</legend>
                    <hr>
                    <div class="row">
                        <div class='col form-group'>
                            <label class='form-label' for="Inscription_Situation_Ecole">Ecole fréquentée<span
                                    class="text-danger">*</span></label>
                            <input class='form-control' type='text' name="Inscription_Situation_Ecole"
                                placeholder="Ecole" id="Inscription_Situation_Ecole" required>
                        </div>

                        <div class='col form-group'>
                            <label class='form-label' for="Inscription_Situation_Ville_Ecole">Ville de l'école<span
                                    class="text-danger">*</span></label>
                            <input class='form-control' type='text' name="Inscription_Situation_Ville_Ecole"
                                placeholder="Ville de l'école" id="Inscription_Situation_Ville_Ecole" required>
                        </div>

                        <div class='col form-group'>
                            <label class='form-label' for="Inscription_Situation_Classe">Classe<span
                                    class="text-danger">*</span></label>
                            <select class='form-control' name="Inscription_Situation_Classe"
                                id="Inscription_Situation_Classe">
                                <option value="Maternelle">Maternelle</option>
                                <option value="CP">CP</option>
                                <option value="CE1">CE1</option>
                                <option value="CE2">CE2</option>
                                <option value="CM1">CM1</option>
                                <option value="CM2">CM2</option>
                                <option value="Collège">Collège</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row form-group">
                        <div class="col">
                            <label class='form-label align-items-center' for="Inscription_Situation_Frere">L'enfant
                                a-t'il des frères et soeurs ?<span class="text-danger">*</span></label>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Situation_Frere1">
                                        Oui
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Situation_Frere"
                                        id="Inscription_Situation_Frere1" value='oui' required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Situation_Frere2">
                                        Non
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Situation_Frere"
                                        id="Inscription_Situation_Frere2" value='non' required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group frere_soeur d-none">
                        <div class="col">
                            <label class='form-label align-items-center' for="Inscription_Situation_frere_soeur">Combien
                                frères et soeurs ?<span class="text-danger">*</span></label>
                            <input class='form-control' type='text' name="Inscription_Situation_frere_soeur"
                                placeholder="Nombre de frères et soeurs" id="Inscription_Situation_frere_soeur">
                        </div>

                    </div>

                    <div class='form-group nbre_frere d-none mt-2'>
                        <label class='form-label' for="Inscription_Situation_Frere_Description">Si oui, veuillez
                            indiquer leurs prénoms , âges et indiquer si participe au séjour à berry
                            tudy</label>

                    </div>

                    <div class='form-group mt-2'>
                        <label class='form-label' for="Inscription_Situation_Description">En cas de problèmes
                            familiaux, merci de nous en faire part pour un meilleur accompagnement de votre
                            enfant durant le séjour :</label>
                        <textarea class='form-control' name="Inscription_Situation_Description" placeholder="Problèmes familiaux"
                            id="Inscription_Situation_Description"></textarea>
                    </div>

                </fieldset>
                {{-- Etape 3 (Info séjour) --}}
                <fieldset class='step'>
                    <legend class='text-center fs-2'>Info séjour</legend>
                    <hr>
                    <div class='form-group'>
                        @if (count($sejours) == 0)
                            <select name="Inscription_Sejour_ID" id="Inscription_Sejour_ID" class="form-select">
                                <option selected disabled value=''>Il n'y a aucun sejour de disponible</option>
                            </select>
                        @else
                            <select name="Inscription_Sejour_ID" id="Inscription_Sejour_ID" class="form-select">
                                <option value="" selected disabled>Veuillez choisir un séjour</option>
                                @foreach ($sejours as $sejour)
                                    <option value="{{ $sejour->Sejour_ID }}">{{ $sejour->Sejour_Nom }} // du
                                        {{ $sejour->Sejour_Date_Debut }} au {{ $sejour->Sejour_Date_Fin }}
                                    </option>
                                @endforeach
                            </select>
                        @endif
                    </div>

                    <hr>

                    <div class="row align-items-center form-group">

                        <div class="col">

                            <label class='form-label text-middle' for="Inscription_Ville_Depart_ID">Ville de
                                départ<span class="text-danger">*</span></label>

                        </div>

                        <div class="col">
                            @foreach ($villes as $ville)
                                <div class="row">
                                    <div class="form-check">
                                        <label class="form-check-label"
                                            for="Inscription_Ville_Depart_ID{{ $ville->Ville_ID }}">
                                            {{ $ville->Ville_Nom }}
                                        </label>
                                        <input class="form-check-input" type="radio" name="Inscription_Ville_Depart_ID"
                                            id="Inscription_Ville_Depart_ID{{ $ville->Ville_ID }}"
                                            value='{{ $ville->Ville_ID }}' required>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <hr>
                    <div class='form-group'>
                        <label class='form-label' for="Inscription_Groupe">Votre enfant souhaite être avec des
                            enfants de sa connaissance pour le voyage et/ou dans le même groupe
                            durant le séjour (en fonction de l’âge) ; merci de nous l’indiquer ici :</label>
                        <textarea class='form-control' name='Inscription_Groupe' id='Inscription_Groupe'
                            placeholder="Veuillez nous indiquer avec qui vous
                        souhaitez que votre enfant voyage à l’aller"
                            rows='4'></textarea>
                    </div>
                    <hr>
                    <div class='form-group'>
                        <label class='form-label' for="Inscription_Groupe">Avec quels autres enfants souhaitent t’il
                            effectuer le séjour?</label>
                        <textarea class='form-control' name='Inscription_autre_enfant' id='Inscription_autre_enfant'
                            placeholder="Autres enfants" rows='4'></textarea>
                    </div>

                </fieldset>
                {{-- Etape 4 (Responsable légal n°1) --}}
                <fieldset class="step">

                    <legend class='text-center fs-2'>Responsable légal n°1</legend>
                    <hr>

                    <div class="row">
                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Legal1_Nom">Nom<span
                                    class="text-danger">*</span></label>
                            <input class='form-control' type="text" name="Inscription_Legal1_Nom" placeholder="Nom"
                                id="Inscription_Legal1_Nom" required>
                        </div>

                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Legal1_Prenom">Prénom<span
                                    class="text-danger">*</span></label>
                            <input class='form-control' type="text" name="Inscription_Legal1_Prenom"
                                placeholder="Nom de famille" id="Inscription_Legal1_Prenom" required>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Lien">Lien de parenté<span
                                class="text-danger">*</span></label>
                        <input class='form-control' type="text" name="Inscription_Legal1_Lien"
                            placeholder="Lien de parenté" id="Inscription_Legal1_Lien" required>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Adresse">Adresse<span
                                class="text-danger">*</span></label>
                        <input class='form-control' type="text" name="Inscription_Legal1_Adresse"
                            placeholder="Adresse" id="Inscription_Legal1_Adresse" required>
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <label for="Inscription_Legal1_Ville" class="form-label">Ville<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name='Inscription_Legal1_Ville'
                                placeholder="Ville" id='Inscription_Legal1_Ville' required>
                        </div>

                        <div class="col form-group">
                            <label for="Inscription_Legal1_CP" class="form-label">Code postal<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="Inscription_Legal1_CP"
                                placeholder="Code postal" id="Inscription_Legal1_CP" required>
                        </div>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Fixe">Téléphone fixe<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Legal1_Fixe"
                            placeholder="Téléphone fixe" id="Inscription_Legal1_Fixe" required>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Portable">Téléphone portable<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Legal1_Portable"
                            placeholder="Téléphone portable" id="Inscription_Legal1_Portable" required>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Email">Email<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Legal1_Email"
                            placeholder="Adresse mail" id="Inscription_Legal1_Email" required>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal1_Employeur">Nom de l'employeur(si
                            participation employeur)</label>
                        <input class="form-control" type="text" name="Inscription_Legal1_Employeur"
                            placeholder="Employeur" id="Inscription_Legal1_Employeur">
                    </div>

                </fieldset>
                {{-- Etape 5 (Responsable légal n°2) --}}
                <fieldset class="step">
                    <legend class='text-center fs-2'>Responsable légal n°2 (optionnel)</legend>
                    <hr>

                    <div class="row">
                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Legal2_Nom">Nom</label>
                            <input class='form-control' type="text" name="Inscription_Legal2_Nom" placeholder="Nom"
                                id="Inscription_Legal2_Nom">
                        </div>

                        <div class="col form-group">
                            <label class='form-label' for="Inscription_Legal2_Prenom">Prénom</label>
                            <input class='form-control' type="text" name="Inscription_Legal2_Prenom"
                                placeholder="Prenom" id="Inscription_Legal2_Prenom">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Lien">Lien de parenté</label>
                        <input class='form-control' type="text" name="Inscription_Legal2_Lien"
                            placeholder="Lien de parenté" id="Inscription_Legal2_Lien">
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Adresse">Adresse</label>
                        <input class='form-control' type="text" name="Inscription_Legal2_Adresse"
                            placeholder="Adresse" id="Inscription_Legal2_Adresse">
                    </div>

                    <div class="row">
                        <div class="col form-group">
                            <label for="Inscription_Legal2_Ville" class="form-label">Ville</label>
                            <input type="text" class="form-control" name='Inscription_Legal2_Ville'
                                placeholder="Ville" id='Inscription_Legal2_Ville'>
                        </div>

                        <div class="col form-group">
                            <label for="Inscription_Legal2_CP" class="form-label">Code postal</label>
                            <input type="text" class="form-control" name="Inscription_Legal2_CP"
                                placeholder="Code postal" id="Inscription_Legal2_CP">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Fixe">Téléphone fixe</label>
                        <input class="form-control" type="text" name="Inscription_Legal2_Fixe"
                            placeholder="Téléphone fixe" id="Inscription_Legal2_Fixe">
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Portable">Téléphone portable</label>
                        <input class="form-control" type="text" name="Inscription_Legal2_Portable"
                            placeholder="Téléphone portable" id="Inscription_Legal2_Portable">
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Email">Email</label>
                        <input class="form-control" type="text" name="Inscription_Legal2_Email"
                            placeholder="Adresse mail" id="Inscription_Legal2_Email">
                    </div>

                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Legal2_Employeur">Nom de l'employeur</label>
                        <input class="form-control" type="text" name="Inscription_Legal2_Employeur"
                            placeholder="Employeur" id="Inscription_Legal2_Employeur">
                    </div>
                </fieldset>
                {{-- Etape 6 (Informations complémentaires) --}}
                <fieldset class="step">
                    <legend class='text-center fs-2'>Informations complémentaires</legend>

                    <hr>
                    <h3>Regime Alimentaire</h3>
                    <div class="row form-group">
                        <div class="col">
                            <label class='form-label' for="Inscription_Regime_Porc">Sans porc ?</label>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Regime_Porc1">
                                        Oui
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Regime_Porc"
                                        id="Inscription_Regime_Porc1" value='oui'>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Regime_Porc2">
                                        Non
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Regime_Porc"
                                        id="Inscription_Regime_Porc2" value='non'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='form-group mt-2'>
                        <label class="form-label" for="Inscription_Regime_Intolerance">Intolérance</label>
                        <input class="form-control" type="text" name="Inscription_Regime_Intolerance"
                            placeholder="Intolérance" id="Inscription_Regime_Intolerance">
                    </div>

                    <div class='form-group mt-2'>
                        <label class="form-label" for="Inscription_Regime_Allergie">Allergie</label>
                        <input class="form-control" type="text" name="Inscription_Regime_Allergie"
                            placeholder="Allergie" id="Inscription_Regime_Allergie">
                    </div>

                    <div class='form-group mt-2'>
                        <label class="form-label" for="Inscription_Regime_Autre">Autre</label>
                        <input class="form-control" type="text" name="Inscription_Regime_Autre" placeholder="Autre"
                            id="Inscription_Regime_Autre">
                    </div>


                    <h3>Obligation d'assurance</h3>

                    <p class="text-md-center">Conformément à la loi, l’Association BERRY-TUDY est couverte par les polices
                        d’assurances pour les
                        biens
                        immobiliers. Toutefois, bien que votre enfant soit sous la responsabilité du directeur de la session
                        pendant le
                        déroulement du séjour, votre responsabilité civile sera engagée lors d’incident ou d’accident causé
                        par votre
                        enfant dans la mesure où aucune faute professionnelle n’aura été commise par le personnel
                        d’encadrement.
                        Vous êtes donc tenu d’être assuré au titre de ce dommage.
                    </p>
                    <hr>
                    <h3>Informations CAF</h3>
                    <div>
                        <div class="form-group">
                            <label for="Inscription_Situation_prise_en_change_caf">Prise en charge CAF (totale ou
                                partielle):</label>

                            <label class="radio-inline">
                                <input type="radio" name="Inscription_Situation_prise_en_change_caf" value="oui">
                                oui
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="Inscription_Situation_prise_en_change_caf" value="non">
                                non
                            </label>
                        </div>
                        <div class="prise_ok d-none">
                            <div class="form-group ">
                                <label class='form-label' for='Inscription_Caf_Numero'>N° d'allocataire C.A.F<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="Inscription_Caf_Numero" placeholder="Numéro d'allocataire"
                                    id="Inscription_Caf_Numero">
                            </div>
                            <div class="form-group ">
                                <label class='form-label' for='Inscription_Caf_ref'>Référence C.A.F<span
                                        class="text-danger">*</span></label>
                                <select name="Inscription_Caf_ref" id="Inscription_Caf_ref" class="form-control">
                                    @foreach (\App\Models\Departement::all() as $item)
                                        @php $selected = $item->code == 18 ? 'selected' : ''; @endphp
                                        <option value="{{ $item->code }}" {{ $selected }}>{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class='form-label' for='Inscription_Caf_Ville'>Précisez la ville de votre C.A.F<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Caf_Ville" placeholder="Ville"
                                id="Inscription_Caf_Ville">
                        </div>
                    </div>
                </fieldset>
                {{-- Etape 7 (Organisme d'accompagnement) --}}
                <fieldset class="step">
                    <legend class='text-center fs-2'>Organisme d'accompagnement (optionnel)</legend>
                    <hr>
                    <p>Si la famille ou l’enfant est suivi par un organisme ou une assistante sociale, merci de
                        faire compléter ce cadre par la personne en charge du suivi.</p>
                    <hr>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Organisme_Intitule">Organisme</label>
                        <input class="form-control" type="text" name="Inscription_Organisme_Intitule"
                            placeholder="Intitulé" id="Inscription_Organisme_Intitule">
                    </div>
                    <div class="form-group">
                        <label for="Inscription_Organisme_Departement" class="form-label">Département</label>
                        <select name="Inscription_Organisme_Departement" id="Inscription_Organisme_Departement"
                            class="form-control">
                            @foreach (\App\Models\Departement::all() as $item)
                                @php $selected = $item->code == 18 ? 'selected' : ''; @endphp
                                <option value="{{ $item->code }}" {{ $selected }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Inscription_Organisme_Ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" name='Inscription_Organisme_Ville'
                            placeholder="Ville" id='Inscription_Organisme_Ville'>
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Organisme_Nom">Nom</label>
                        <input class="form-control" type="text" name="Inscription_Organisme_Nom" placeholder="Nom"
                            id="Inscription_Organisme_Nom">
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Organisme_Qualite">Fonction</label>
                        <input class="form-control" type="text" name="Inscription_Organisme_Qualite"
                            placeholder="Qualité" id="Inscription_Organisme_Qualite">
                    </div>
                    <div class='form-group'>
                        <label for="Inscription_Organisme_Fixe" class="form-label">Téléphone fixe</label>
                        <input type="text" class="form-control" name='Inscription_Organisme_Fixe'
                            placeholder="Téléphone fixe" id='Inscription_Organisme_Fixe'>
                    </div>
                    <div class='form-group'>
                        <label for="Inscription_Organisme_Portable" class="form-label">Téléphone portable</label>
                        <input type="text" class="form-control" name="Inscription_Organisme_Portable"
                            placeholder="Téléphone portable" id="Inscription_Organisme_Portable">
                    </div>
                    <div class='form-group'>
                        <label for="Inscription_Organisme_Email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="Inscription_Organisme_Email"
                            placeholder="Adresse mail" id="Inscription_Organisme_Email">
                    </div>
                </fieldset>
                {{-- Etape 8 (Qui prévenir en cas d'urgences ?) --}}
                <fieldset class="step">
                    <legend class='text-center fs-2'>personne à prévenir en cas d’urgence ?</legend>
                    <hr>
                    <div class="form-group">

                        <label class="radio-inline">
                            <input type="radio" name="Inscription_Situation_personne_acontacter" value="Legal1">
                            Responsable Légal 1
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Inscription_Situation_personne_acontacter" value="Legal2">
                            responsable légal 2
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="Inscription_Situation_personne_acontacter" value="Autre">Autre
                        </label>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label class="form-label" for="Inscription_Urgence_Nom">Nom<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_Nom" placeholder="Nom"
                                id="Inscription_Urgence_Nom">
                        </div>
                        <div class="col form-group">
                            <label class="form-label" for="Inscription_Urgence_Prenom">Prénom<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_Prenom"
                                placeholder="Prénom" id="Inscription_Urgence_Prenom">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Urgence_Parente">Lien de parenté</label>
                        <input class="form-control" type="text" name="Inscription_Urgence_Parente"
                            placeholder="Lien de parenté" id="Inscription_Urgence_Parente">
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Urgence_Adresse">Adresse<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Urgence_Adresse"
                            placeholder="Adresse" id="Inscription_Urgence_Adresse">
                    </div>
                    <div class="row">

                        <div class='col form-group'>
                            <label class="form-label" for="Inscription_Urgence_Ville">Ville<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_Ville"
                                placeholder="Ville" id="Inscription_Urgence_Ville">
                        </div>
                        <div class='col form-group'>
                            <label class="form-label" for="Inscription_Urgence_CP">Code postal<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_CP"
                                placeholder="Code postal" id="Inscription_Urgence_CP">
                        </div>
                    </div>
                    <div class="row">

                        <div class='form-group'>
                            <label class="form-label" for="Inscription_Urgence_Fixe">Téléphone fixe<span
                                    class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_Fixe"
                                placeholder="Téléphone fixe" id="Inscription_Urgence_Fixe">
                        </div>
                        <div class='form-group'>
                            <label class="form-label" for="Inscription_Urgence_Portable">Téléphone
                                portable<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="Inscription_Urgence_Portable"
                                placeholder="Téléphone portable" id="Inscription_Urgence_Portable">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label class="form-label" for="Inscription_Urgence_Pro">Téléphone pro<span
                                class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="Inscription_Urgence_Pro"
                            placeholder="Téléphone pro" id="Inscription_Urgence_Pro">
                    </div>
                </fieldset>
                {{-- Etape 9 (Présentation du projet éducatif) --}}
                <fieldset class='step'>
                    <legend class="text-center fs-2">Présentation du projet éducatif</legend>
                    <hr>
                    <div class="row border-bottom border-bottom-2">
                        <p class='text-center'>Nous tenons à vous faire part de notre déclaration d’intention figurant dans
                            notre projet
                            éducatif, qui est disponible dans son intégralité sur notre site (berrytudy.fr) ou au
                            secrétariat :<br />
                            L’association Berry-Tudy, régie par la loi 1901, organise des séjours accueillant des enfants de
                            6 à 16 ans en son centre de l’ Ile Tudy (29 – Finistère).<br />
                            C’est en 1946, que Mgr LE GUENNE, alors curé de la Cathédrale de Bourges, décida de
                            permettre, au lendemain de la guerre, aux petits berrichons de découvrir la mer.<br />
                            A l'origine le Centre de Vacances BERRY-TUDY accueillait des enfants reliés à des
                            communautés paroissiales de la ville et du département.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center">Depuis des années, en réponse à l’attente de nombreuses
                                familles, l'Association s'est ouverte à
                                toutes les familles, sans distinction de catégories sociales ou de culte, tout en s'appuyant
                                sur les
                                valeurs originelles qui ont guidé sa démarche depuis maintenant 60 ans :</li>
                            <li class="list-group-item ">• Favoriser l’accueil d’enfants de tous milieux et
                                origines</li>
                            <li class="list-group-item ">• Permettre la découverte de l’environnement, de la
                                culture bretonne</li>
                            <li class="list-group-item ">• Communiquer des convictions de partage, de respect,
                                d’accueil et de tolérance.</li>
                            <li class="list-group-item ">• Développer un centre accueillant et fonctionnel
                                privilégiant l’enfant et son
                                environnement.</li>
                        </ul>
                    </div>
                    <div class=" form-group mt-2">
                        <div class="col align-self-center">
                            <label class='form-label' for="Inscription_Office">De par nos origines constitutives, nous
                                proposons aux enfants qui le
                                souhaitent d'assister à un office religieux
                                catholique. Nous vous invitons à nous préciser votre position :<span
                                    class="text-danger">*</span></label>
                        </div>
                        <div class="col align-items-center">
                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Office1">
                                        Autorise mon enfant à participer, s'il le souhaite, à un office religieux.
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Office"
                                        id="Inscription_Office1" value='oui' required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <label class="form-check-label" for="Inscription_Office2">
                                        Ne souhaite pas que mon enfant participe à un office religieux.
                                    </label>
                                    <input class="form-check-input" type="radio" name="Inscription_Office"
                                        id="Inscription_Office2" value='non' required>
                                </div>
                            </div>
                        </div>
                        <div class='col form-group'>
                            <label class='form-label' for="Inscription_Montant_Sejour">Montant Séjour</label>
                            <input class='form-control' type='text' name="Inscription_Montant_Sejour"
                                placeholder="Montant Acompte" id="Inscription_Montant_Sejour" required>
                        </div>
                        <div class='col form-group'>
                            <label class='form-label' for="Inscription_Montant_Acompte">Montant Acompte</label>
                            <input class='form-control' type='text' name="Inscription_Montant_Acompte"
                                placeholder="Montant Séjour" id="Inscription_Montant_Acompte" required>
                        </div>
                    </div>
                </fieldset>

                <div class="row justify-content-between my-3">
                    <div class="col-lg-2 col-md-3 col-4 text-center">
                        <button type="button" class='btn btn-primary ' id="prevBtn"
                            onclick="nextPrev(-1)">Précédent</button>
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 text-center">
                        <button type="button" class='btn btn-primary' id="nextBtn"
                            onclick="nextPrev(1)">Suivant</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('extra-js')
    {{-- Bootstrap datepicker --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js"
        integrity="sha512-fx3aztaUjb4NyoD+Tso5g7R1l29bU3jnnTfNRKBiY9fdQOHzVhKJ10wEAgQ1zM/WXCzB9bnVryHD1M40775Tsw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- custom Js --}}
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-pincode-input.js') }}"></script>
    <script src="{{ asset('assets/js/calendrier.js') }}"></script>
    <script src="{{ asset('assets/js/formEnfantHandler.js') }}"></script>
@endsection
