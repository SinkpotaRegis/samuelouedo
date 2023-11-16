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
        return view('Back.animateur',compact('animateurs')); }

    public function grade(){ 
        $grades = Grade::all(); 
        return view('Back.grade',compact('grades'));
     }

    public function poste(){  return view('Back.poste'); }

    public function parametre(){  return view('Back.parametre'); }

    public function paroisse(){
        $paroisses = Paroisse::all(); 
        return view('Back.paroisse',compact('paroisses')); }

    public function connexion(){  return view('Back.connexion'); }
}
