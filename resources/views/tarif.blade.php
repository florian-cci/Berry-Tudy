@extends('layouts.app')

@section('title')
    Séjour famille
@endsection

@section('extra-css')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class='col-lg-6 col-md-8 col-10'>

            
                <fieldset >
                    <legend class="text-center fs-2">Choisissez votre séjours</legend>
                    <div class="table-responsive">
                        <table class='table table-striped text-center'>
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
                                    <th scope="row">Adulte (à partir de 17 ans)</th>
                                    <td>{{ $pensionDemi->Prix_Adulte }} €</td>
                                    <td>{{ $pensionComplete->Prix_Adulte }} €</td>
                                    <td>{{ $pensionNuit->Prix_Adulte }} €</td>
                                    <td>{{ $pensionRepas->Prix_Adulte }} €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enfant de 12 à 16 ans</th>
                                    <td>{{ $pensionDemi->Prix_Ado }} €</td>
                                    <td>{{ $pensionComplete->Prix_Ado }} €</td>
                                    <td>{{ $pensionNuit->Prix_Ado }} €</td>
                                    <td>{{ $pensionRepas->Prix_Ado }} €</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enfant de 4 à 11 ans</th>
                                    <td>{{ $pensionDemi->Prix_Enfant }} €</td>
                                    <td>{{ $pensionComplete->Prix_Enfant }} €</td>
                                    <td>{{ $pensionNuit->Prix_Enfant }} €</td>
                                    <td>{{ $pensionRepas->Prix_Enfant }} €</td>
                                </tr>
                                <tr>
                                    <th scope="row"> Enfants de 3 ans et moins</th>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                    <td>Gratuit</td>
                                </tr>
                                
                                
                               
                            </tbody>
                        </table>
                    </div>
                    
                </fieldset>
        </div>
    </div>
@endsection

