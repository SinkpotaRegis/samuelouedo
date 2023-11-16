<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paroisse extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'localisation',
        'email',
    ];
}
