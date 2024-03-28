<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'nom',
        'prenom',
        'photo',
        'grade',
        'date_naissance',
        'date_recrutement',
        'poste',
        'phone_number',
        'email',
        'établissement_id',
        'metier_id',
    ];

    public function établissement()
    {
        return $this->belongsTo(établissement::class);
    }

    public function metier()
    {
        return $this->belongsTo(metier::class);
    }
}
