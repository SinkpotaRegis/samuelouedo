<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epeuve extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'id_grade',
        'epreuve',
    ];

    public function grade() {
        return $this->belongsTo(Grade::class, 'id_grade','id');
    }
}
