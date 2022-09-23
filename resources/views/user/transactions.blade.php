@extends('layouts.app')
@section('title')
    Mes Paiements
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Mes Paiements</h3>
                </div>
                <div class="col">
                    <div class="card-body">
                       <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Inscription</th>
                                <th>Séjour à la carte</th>
                                <th>Séjour à la semaine</th>
                                <th>Montant total</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $item)
                            <tr>
                                <td>{{ $item->reference }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->inscription->Inscription_Nom }}</td>
                                <td>{{ $item->inscription->Inscription_Montant_B }} €</td>
                                <td>{{ $item->inscription->Inscription_Montant_A }} €</td>
                                <td>{{ $item->inscription->Inscription_Montant_Total }} €</td>
                                <td>
                                    @if ($item->status == "success")
                                        <span class="badge bg-success">Payé</span>
                                    @elseif ($item->status == "pending")
                                        <span class="badge bg-info">En attente</span>
                                    @else
                                        <span class="badge bg-danger">Non payé</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == "pending")
                                        <a href="{{ route('payment',$item->uuid) }}" class="btn btn-sm btn-primary">Payer</a>
                                    @endif
                                   
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
