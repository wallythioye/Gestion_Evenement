<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EvenementController;
use \App\Models\evenement;
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
//     $evenements = Evenement::all();
//     return view('welcome', compact('evenements'));
// });
Route::get('/', function () {
    $evenements = Evenement::all();
    return view('welcome', compact('evenements'));
})->name('accueil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'bienvenue'])->name('welcome');

// ...

Route::get('/evenement/ajout', [EvenementController::class, 'ajout_evenement'])->name('evenement.create');
Route::post('/evenement', [EvenementController::class, 'ajout_evenement_traitement'])->name('evenement.ajout_traitement');
Route::get('/liste/evenement', [EvenementController::class, 'liste_evenement'])->name("liste_evenement");
Route::get('/evenements/{id}', [EvenementController::class, 'detail_evenement'])->name('evenement.details');
Route::get('/evenements_user/{id}', [EvenementController::class, 'detail_evenement_user'])->name('evenement.details_user');
Route::get('/evenementsClient/{id}', [EvenementController::class, 'detail_evenement_user'])->name('evenements.details_user');
Route::get('/modifier-evenement/{id}', [EvenementController::class, 'modifier_evenement']);
Route::post('/modifier-evenement/{id}', [EvenementController::class, 'modifier_evenement_traitement'])->name('modifier-evenement');
Route::get('/supprimer-evenement/{id}', [EvenementController::class, 'supprimer_evenement'])->name('supprimer-evenement');


Route::get('/se-deconnecter', [EvenementController::class, 'deconnection'])->name('user.logout');

