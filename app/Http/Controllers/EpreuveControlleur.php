<?php

namespace App\Http\Controllers;

use App\Models\Epeuve;
use App\Models\fs;
use App\Models\Grade;
use Illuminate\Http\Request;

class EpreuveControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function epreuve(){ 
        $grades = Grade::all(); 
        $NosEpreuves = Epeuve::all(); 
        return view('back.galerie.banque-epreuve',compact('grades', 'NosEpreuves'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_epreuve(Request $request){

        if ($request->hasFile('epreuve') && $request->file('epreuve')->isValid()) {
            $fichier = $request->file('epreuve');
        
            // Vérification du type MIME du fichier
            if ($fichier->getMimeType() === 'application/pdf' || 
                $fichier->getMimeType() === 'application/msword' || 
                $fichier->getMimeType() === 'application/vnd.ms-excel') {
                
                $cheminFichier = $fichier->store('epreuve', 'public');
                // Enregistrer le fichier dans le dossier "storage/epreuve"
        
                // Enregistrement du chemin du fichier dans la base de données
                // Par exemple, si vous avez un modèle Epreuve correspondant à votre table
                $epreuves = new Epeuve();
                $epreuves->titre = $request->titre;
                $epreuves->id_grade = $request->id_grade;
                $epreuves->epreuve = $cheminFichier;
                $epreuves->save();
                return redirect()->route('back.getepreuve')->with('status','Enregistrement éffectué');
                
                // Autres actions à effectuer après l'enregistrement du fichier...
            } else {
                // Gérer le cas où le fichier n'est ni un PDF, ni un fichier Word, ni un fichier Excel
                return back()->with('error', 'Veuillez télécharger un fichier PDF, Word ou Excel.');
            }
        } else {
            // Gérer le cas où aucun fichier n'est téléchargé ou s'il y a une erreur dans le fichier
            return back()->with('error', 'Une erreur est survenue lors du téléchargement du fichier.');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fs $fs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fs $fs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fs $fs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fs $fs)
    {
        //
    }
}
