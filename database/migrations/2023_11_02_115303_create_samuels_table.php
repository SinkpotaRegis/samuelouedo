<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('samuels', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->unsignedBigInteger('id_paroisse');
            $table->unsignedBigInteger('id_grade');
            $table->string('annee_pastorale');
            $table->string('photo');

            $table->foreign('id_paroisse')->references('id')->on('paroisses')->onDelete('cascade');
            $table->foreign('id_grade')->references('id')->on('grades')->onDelete('cascade');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samuels');
    }
};
