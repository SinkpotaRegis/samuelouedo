<?php

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

Route::get('/back', function () {
    return view('Back.index');
});

Route::get('/samuel', function () {
    return view('Back.acteurs.samuel');
});

Route::get('/animateur', function () {
    return view('Back.acteurs.animateur');
});

Route::get('/banque-epreuve', function () {
    return view('Back.galerie.banque-epreuve');
});

Route::get('/stock-photo', function () {
    return view('Back.galerie.stockage-photo');
});

Route::get('/grade', function () {
    return view('Back.grade');
});

Route::get('/poste', function () {
    return view('Back.poste');
});

Route::get('/paroisse', function () {
    return view('Back.paroisse');
});

Route::get('/parametre', function () {
    return view('Back.parametre');
});

Route::get('/connexion', function () {
    return view('Back.connexion');
});