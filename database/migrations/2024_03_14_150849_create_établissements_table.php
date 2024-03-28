<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('établissements', function (Blueprint $table) {
            $table->id();
            $table->string('établissement');
            $table->string('code');
            $table->string('adresse');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->foreignId('ville_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('établissements');
    }
};
