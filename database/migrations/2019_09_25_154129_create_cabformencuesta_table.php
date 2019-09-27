<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabformencuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabformencuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descrpEncuesta', 150);
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
        Schema::dropIfExists('cabformencuesta');
    }
}
