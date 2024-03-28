<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class établissement extends Model
{
    protected $fillable = [
        'établissement', // Add 'établissement' to the fillable array
        'code',
        'adresse',
        'phone_number',
        'fax_number',
        'ville_id',
    ];

    use HasFactory;
}
