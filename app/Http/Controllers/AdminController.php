<?php

namespace App\Http\Controllers;

use App\Models\Animateur;
use App\Models\Grade;
use App\Models\Paroisse;
use App\Models\Samuel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function accueilAdmin(){  return view('Back.index'); }

    public function samuel(){  
        $samuels = Samuel::all();
        $paroisses = Paroisse::all();
        $grades = Grade::all();
        return view('Back.samuel', compact('samuels','paroisses','grades')); }

    public function animateur(){  
        $animateurs = Animateur::all();
        $paroisses = Paroisse::all();
        return view('Back.animateur',compact('animateurs','paroisses')); }

    public function poste(){  return view('Back.poste'); }
    
    public function index(){  return view('Back.index'); }

    public function parametre(){  return view('Back.parametre'); }

    public function paroisse(){
        $paroisses = Paroisse::all(); 
        return view('Back.paroisse',compact('paroisses')); }

    public function trierAnimateursParParoisse($id)
    {
        // Récupérer les animateurs pour une paroisse spécifique
        $animateursParParoisse = Animateur::where('id_paroisse', $id)->get();

        return view('Back.animateurTrier', compact('animateursParParoisse'));
    }

    public function connexion(){  return view('Back.connexion'); }
}
