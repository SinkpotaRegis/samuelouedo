<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\SamuelController;
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

Route::get('/', function () {
    return view('welcome');
});
/*******
 * NOS ROUTES POUR LE GET
 */

Route::get('/index', [AdminController::class, 'accueilAdmin']);
Route::get('/samuel', [AdminController::class, 'samuel'])->name('back.getsamuel');
Route::get('/animateur', [AdminController::class, 'animateur'])->name('back.getanimateur');
Route::get('/grade', [AdminController::class, 'grade'])->name('back.getgrade');
Route::get('/poste', [AdminController::class, 'poste']);
Route::get('/paroisse', [AdminController::class, 'paroisse'])->name('back.getparoisse');
Route::get('/parametre', [AdminController::class, 'parametre']);
Route::get('/connexion', [AdminController::class, 'connexion']);


 /*******
  * NOS ROUTES POUR LE POST
  */
Route::post('/ajout/grade', [AdminPostController::class,'ajout_grade'])->name('back.grade');
Route::post('/ajout/paroisse', [AdminPostController::class,'ajout_paroisse'])->name('back.paroisse');
Route::post('/ajout/samuel', [AdminPostController::class,'ajout_samuel'])->name('back.samuel');
Route::post('/ajout/animateur', [AdminPostController::class,'ajout_animateur'])->name('back.animateur');