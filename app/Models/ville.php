<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ville extends Model
{
        protected $fillable = ['ville_original', 'ville_migration', 'region_id'];

    

    use HasFactory;
}
