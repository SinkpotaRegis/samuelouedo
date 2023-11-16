<?php

namespace App\Http\Controllers;
use App\Models\Grade;
use App\Models\Paroisse;
use App\Models\Samuel;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function ajout_grade(Request $request){
        $grade = new Grade();
        $grade->libelle = $request->libelle;
        $grade->description = $request->description;
        $grade->save();
        return redirect()->route('back.getgrade')->with('status','Enregistrement éffectué');
    }

    public function ajout_paroisse(Request $request){

        $paroisse = new Paroisse();
        $paroisse->nom = $request->nom;
        $paroisse->localisation = $request->localisation;
        $paroisse->email = $request->email;
        $paroisse->save();
        return redirect()->route('back.getparoisse')->with('status','Enregistrement éffectué');
    }

    public function ajout_samuel(Request $request){
        $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'id_paroisse' => 'required',
            'id_grade' => 'required',
            'annee_pastorale' => 'required',
            'photo' => 'required|mimes:jpeg,png,gif,jpg', // Valider que la photo est une image et a une taille maximale de 2MB
        ]);

        //Enregistrement du chemin de la photo

        if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('imgSamuel', 'public'); // Enregistrer la photo dans le dossier "storage/img"
        // Enregistrer le chemin de la photo dans la base de données

        $samuel = new Samuel();
        $samuel->matricule = $request->matricule;
        $samuel->nom = $request->nom;
        $samuel->prenom = $request->prenom;
        $samuel->id_paroisse = $request->id_paroisse;
        $samuel->id_grade = $request->id_grade;
        $samuel->annee_pastorale = $request->annee_pastorale;
        $samuel->photo = $photoPath;
        $samuel->save();
        return redirect()->route('back.getsamuel')->with('status','Enregistrement éffectué');}
    }
}
