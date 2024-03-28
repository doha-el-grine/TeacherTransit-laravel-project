<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metier extends Model
{
    protected $fillable = [
        'metier',
    ];
    use HasFactory;
}
