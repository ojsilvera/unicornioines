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
            $table->bigIncrements('id');
            $table->string('descrpPregunta', 300);
            $table->bigInteger('indicadorId')->unsigned();
            $table->foreign('indicadorId')->references('id')->on('indicador');
            $table->bigInteger('cuerpEncuestaId')->unsigned();
            $table->foreign('cuerpEncuestaId')->references('id')->on('cuerpoformencuesta');
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
