<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoaccesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datoacceso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userName', 50);
            $table->string('password', 10);
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
        Schema::dropIfExists('datoacceso');
    }
}
