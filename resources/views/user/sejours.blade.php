 @extends('layouts.app')
 @section('title')
     Mes séjours
 @endsection

 @section('content')
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                     <h3 class="text-center">Mes séjours</h3>
                 </div>
                 <div class="col">
                     <div class="card-body">
                         @if (count($user_sejours_famille) == 0 && count($user_sejours_enfant) == 0)
                             <div class="alert alert-info">Vous n'êtes inscrit à aucun séjour</div>
                         @else
                             @if (count($user_sejours_famille) > 0)
                                 <div class='text-center'>
                                     <span class='fs-5'>Séjour famille</span>
                                     <hr>
                                 </div>
                                 @foreach ($user_sejours_famille as $sejour_famille)
                                     <div class="row">
                                         <div class="col"></div>
                                     </div>
                                 @endforeach
                             @endif
                             @if (count($user_sejours_enfant) > 0)
                                 <div class='text-center'>
                                     <span class='fs-5'>Séjour enfant</span>
                                     <hr>
                                 </div>
                                 @foreach ($user_sejours_enfant as $sejour_enfant)
                                     <div class="row">
                                         <div class="col"></div>
                                     </div>
                                 @endforeach
                             @endif
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
