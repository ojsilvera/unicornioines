<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuerpoformencuestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerpoformencuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabFormEncuestaid')->unsigned();
            $table->foreign('cabFormEncuestaid')->references('id')->on('cabformencuesta');
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
        Schema::dropIfExists('cuerpoformencuesta');
    }
}
