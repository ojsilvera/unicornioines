<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabencuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabencuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descrpEncuesta', 150);
            $table->date('fechEncuesta');
            $table->bigInteger('dtosGnelid')->unsigned();
            $table->foreign('dtosGnelId')->references('id')->on('datosgenerales');
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
        Schema::dropIfExists('cabencuesta');
    }
}
