<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrrespTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prresp', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('preguntaid')->unsigned();
            $table->foreign('preguntaid')->references('id')->on('pregunta');
            $table->bigInteger('respuestaid')->unsigned();
            $table->foreign('respuestaid')->references('id')->on('respuesta');

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
        Schema::dropIfExists('prresp');
    }
}
