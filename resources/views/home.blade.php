@extends('layouts.app')

@section('title')
	Accueil
@endsection

@section('content')

	<div class='row justify-content-center align-items-center'>
		<div class="col">

			<div class='text-center pb-5' id='logo'>
				<img src="/assets/img/logo.png" alt="Centre de vacances BerryTudy" class='img-fluid'>
			</div>

			<div class='row'>
				<div id="enfant" class="col text-center"><a class='fs-3 btn btn-primary' href='/enfant'>Séjours enfant</a></div>
				<div id="famille"class="col text-center"><a class='fs-3 btn btn-primary' href='/famille'>Séjours famille</a></div>
			</div>

		</div>
	</div>
@endsection
