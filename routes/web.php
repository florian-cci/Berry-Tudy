<?php

use Whoops\Run;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\SejourController;
use App\Http\Controllers\FamilleController;
use App\Http\Controllers\PaymentController;

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
	Route::get('/payment/{trans_id}', [PaymentController::class, 'index'])->name('payment');
	
	//Séjour de l'utilisateur
	Route::get('/transactions', [PaymentController::class, 'transactions'])->name('user.payment');
	Route::get('/sejour', [SejourController::class, 'index'])->name('user.sejours');
	
});
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::get('generate-pdf/{title}/{type}/{id}', [PDFController::class, 'generatePDF'])->name('pfd');

require __DIR__.'/auth.php';
