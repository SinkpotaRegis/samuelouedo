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
        Schema::create('animateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('contact');
            $table->string('email');
            $table->unsignedBigInteger('id_paroisse');
            $table->string('poste');
            $table->string('annee_pastorale');
            $table->string('photo');
            $table->foreign('id_paroisse')->references('id')->on('paroisses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animateurs');
    }
};
