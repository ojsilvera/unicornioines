<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->bigIncrements('idPregunta');
            $table->string('descrpPregunta', 300);
            $table->bigInteger('respuestaid')->unsigned();
            $table->foreign('respuestaid')->references('idRespuesta')->on('respuesta');
            $table->bigInteger('indicadorid')->unsigned();
            $table->foreign('indicadorid')->references('idIndicador')->on('indicador');
            $table->bigInteger('cuerpEncuestaid')->unsigned();
            $table->foreign('cuerpEncuestaid')->references('idCuerpEncuesta')->on('cuerpoencuesta');
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
        Schema::dropIfExists('pregunta');
    }
}
