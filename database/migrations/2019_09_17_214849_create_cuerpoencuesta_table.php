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
            $table->bigIncrements('id');
            $table->bigInteger('cabEncuestaid')->unsigned();
            $table->foreign('cabEncuestaid')->references('id')->on('cabencuesta');
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
