<?php

use App\Http\Controllers\FaitController;
use App\Models\Fait;
use Illuminate\Support\Facades\Route;

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

// Route vers l'accueil
Route::get('/', [FaitController::class, 'index'])
    ->name('accueil');

// Route vers la liste de tous les faits
Route::get('/faits', [FaitController::class, 'show'])
    ->name('faits');

// Route vers le formulaire permettant de modifier un fait
Route::get('/faits/creer', [FaitController::class, 'create'])
    ->name('create-fait');
// Route pour enregistrer un fait et rediriger
Route::post('/faits/sauvegarder', [FaitController::class, 'store']);

// Route pour supprimer un fait
Route::get('/faits/supprimer/{id}', [FaitController::class, 'destroy']);

// Route pour afficher la vue qui sert à modifier un fait
Route::get('/faits/modifier/{id}', [FaitController::class, 'edit']);
// Route pour enregistrerles modification d'un fait
Route::post('/faits/modifier/{id}', [FaitController::class, 'update']);
