<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabencuestadiligenciadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabencuestadiligenciada', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descrpEncuesta',150)->nullable();
            $table->bigInteger('dtoGnelid')->unsigned();
            $table->foreign('dtoGnelid')->references('id')->on('datogenerales');
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
        Schema::dropIfExists('cabencuestadiligenciada');
    }
}
