<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabreporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabreporte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fchReporte');
            $table->string('descrpReporte', 250);
            $table->bigInteger('cabEncuestadilid')->unsigned();
            $table->foreign('cabEncuestadilid')->references('id')->on('cabencuestadiligenciada');
            $table->bigInteger('cuerpoFormEncuestaid')->unsigned();
            $table->foreign('cuerpoFormEncuestaid')->references('id')->on('cuerpoformencuesta');
            $table->Integer('documento');
            $table->foreign('documento')->references('documento')->on('usuario');
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
        Schema::dropIfExists('cabreporte');
    }
}
