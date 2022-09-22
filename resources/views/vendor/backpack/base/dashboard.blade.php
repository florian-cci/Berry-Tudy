@extends(backpack_view('blank'))

@php

use App\Models\User;

    $widgets['before_content'][] = [
    'type'          => 'progress_white',
    'class'         => 'card mb-2',
    'value'         => User::count(),
    'description'   => 'Nombre d\'utilisateurs',
    'progress'      => 50, // integer
    'progressClass' => 'progress-bar bg-primary',
    'hint'          => '',
];
@endphp

@section('content')
  <p>Your custom HTML can live here</p>
@endsection
