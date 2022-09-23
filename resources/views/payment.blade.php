@extends('layouts.app')

@section('title')
    Paiements
@endsection

@section('content')
        <div class="row justify-content-center">
            <div class="well col-md-6">

                <div class="row">
                    <div class="text-center">
                        <h1>Recapitulatif</h1>
                    </div>
                    </span>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>#</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td class="col-md-9"><em>Séjour à la carte</em></h4>
                                </td>
                                <td class="col-md-1" style="text-align: center"> 1 </td>
                                <td class="col-md-1 text-center">{{ $transaction->inscription->Inscription_Montant_B }} €</td>
                                <td class="col-md-1 text-center">{{ $transaction->inscription->Inscription_Montant_B }} €</td>
                            </tr>
                            <tr>
                                <td class="col-md-9"><em>Séjour à la semaine</em></h4>
                                </td>
                                <td class="col-md-1" style="text-align: center"> 1 </td>
                                <td class="col-md-1 text-center">{{ $transaction->inscription->Inscription_Montant_A }} €</td>
                                <td class="col-md-1 text-center">{{ $transaction->inscription->Inscription_Montant_A }} €</td>
                            </tr>
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td class="text-right">
                                    <p>
                                        <strong>Subtotal:</strong>
                                    </p>
                                    <p>
                                        <strong>Tax: </strong>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <p>
                                        <strong>{{ $transaction->inscription->Inscription_Montant_Total }} €</strong>
                                    </p>
                                    <p>
                                        <strong>0 €</strong>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>   </td>
                                <td>   </td>
                                <td class="text-right">
                                    <h4><strong>Total: </strong></h4>
                                </td>
                                <td class="text-center text-danger">
                                    <h4><strong>{{ $transaction->inscription->Inscription_Montant_Total }}€</strong></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {!! $systemPay->render('<button type="submit" class="btn btn-success btn-block"> Payer maintenant</button>') !!}
                    </td>
                </div>
            </div>
        </div>
    @endsection
