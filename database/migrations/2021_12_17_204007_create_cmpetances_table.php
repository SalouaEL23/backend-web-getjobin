<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmpetancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmpetances', function (Blueprint $table) {
            $table->id();
            $table->string("libelle");
            $table->string("desc");
            $table->foreignId('mycv_id');
            $table->foreign('mycv_id')->references('id')->on('mycvs')->onDelete('cascade');
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
        Schema::dropIfExists('cmpetances');
    }
}
