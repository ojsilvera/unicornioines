<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuerporeporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerporeporte', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabreporteid')->unsigned();
            $table->foreign('cabreporteid')->references('id')->on('cabreporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuerporeporte');
    }
}
