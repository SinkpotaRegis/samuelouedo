<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animateur extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'email',
        'id_paroisse',
        'poste',
        'annee_pastorale',
        'photo',
    ];
    use HasFactory;
    public function paroisse() {
        return $this->belongsTo(Paroisse::class, 'id_paroisse','id');
    }

    
}
