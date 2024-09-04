<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OffreMutuelleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

 Route::get('/offres', [OffreMutuelleController::class, 'index'])->name('offre_mutuelle.index');

// Route::get('/offres/create', [OffreMutuelleController::class, 'create'])->name('offre_mutuelle.create');

// Route::post('/offres', [OffreMutuelleController::class, 'store'])->name('offre_mutuelle.store');



// Route::get('/souscriptions', [SouscriptionController::class, 'index'])->name('souscription.index');


// Route::get('/support', [SupportController::class, 'index'])->name('support.index');




