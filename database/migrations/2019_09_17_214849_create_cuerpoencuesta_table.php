<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuerpoencuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerpoencuesta', function (Blueprint $table) {
            $table->bigIncrements('idCuerpEncuesta');
            $table->bigInteger('cabEncuestaid')->unsigned();
            $table->foreign('cabEncuestaid')->references('idEncuesta')->on('cabencuesta');
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
        Schema::dropIfExists('cuerpoencuesta');
    }
}
