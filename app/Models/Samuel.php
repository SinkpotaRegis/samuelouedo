<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samuel extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'id_paroisse',
        'id_grade',
        'annee_pastorale',
        'photo',
    ];

    public function paroisse() {
        return $this->belongsTo(Paroisse::class, 'id_paroisse','id');
    }

    public function grade() {
        return $this->belongsTo(Grade::class, 'id_grade','id');
    }
}
