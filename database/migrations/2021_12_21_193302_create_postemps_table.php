<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postemps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offre_id');
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->foreignId('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
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
        Schema::dropIfExists('postemps');
    }
}
