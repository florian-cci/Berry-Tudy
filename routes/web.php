<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\SejourController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\VilleController as AdminVilleController;
use App\Http\Controllers\Admin\SejourController as AdminSejourController;
use App\Http\Controllers\Admin\PensionController as AdminPensionController;
use App\Http\Controllers\Admin\EnfantController as AdminEnfantController;
use App\Http\Controllers\Admin\FamilleController as AdminFamilleController;
use Whoops\Run;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth'])->group(function () {

	//acceuil
	Route::get('/', function () {
		return view('home');
	})->name('home');
	//formulaire inscription séjour enfant
	Route::resource('enfant', EnfantController::class)->name('*', 'enfant');

	//formulaire inscription séjour famille
	Route::resource('famille', FamilleController::class)->name('*', 'famille');

	Route::get('/tarif', [FamilleController::class, 'tarif'])->name('tarif');

	//Séjour de l'utilisateur
	Route::get('/sejour', [SejourController::class, 'index'])->name('user.sejours');

});


require __DIR__.'/auth.php';
