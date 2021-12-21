<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->string("image");
            $table->string("password");
            $table->date("date_naissance");
            $table->string("nmro_tel");
            $table->string("sexe");
            $table->foreignId('adresse_id');
            $table->foreign('adresse_id')->references('id')->on('adresses')->onDelete('cascade');
            $table->foreignId('statut_id');
            $table->foreign('statut_id')->references('id')->on('statuts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}
