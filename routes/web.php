<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\EpreuveControlleur;
use Illuminate\Support\Facades\Route;

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

/**
 * Nos get
 */

Route::get('/animateur',[AdminController::class, 'animateur'])->name('back.getanimateur');
Route::get('/connexion',[AdminController::class, 'connexion']);
Route::get('/grade',[AdminController::class, 'grade']);
Route::get('/',[AdminController::class, 'index']);
Route::get('/parametre',[AdminController::class, 'parametre']);
Route::get('/poste',[AdminController::class, 'poste']);
Route::get('/samuel',[AdminController::class, 'samuel'])->name('back.getsamuel');
Route::get('paroisse',[AdminController::class, 'paroisse'])->name('back.getparoisse');
Route::get('/banque-epreuve',[EpreuveControlleur::class, 'epreuve'])->name('back.getepreuve');

Route::get('/stock-photo', function () {
    return view('Back.galerie.stockage-photo');
});
Route::get('/animateurs/trier-par-paroisse/{idParoisse}', [AdminController::class, 'trierAnimateursParParoisse'])->name('animateurs.trierParParoisse');
/**
 * Nos post
 */

 Route::post('ajout/paroisse', [AdminPostController::class, 'ajout_paroisse'])->name('back.paroisse');
 Route::post('ajout/samuel', [AdminPostController::class, 'ajout_samuel'])->name('back.postsamuel');
 Route::post('ajout/animateur', [AdminPostController::class, 'ajout_animateur'])->name('back.postanimateur');
 Route::post('ajout/epreuve', [EpreuveControlleur::class, 'ajout_epreuve'])->name('back.postepreuve');
