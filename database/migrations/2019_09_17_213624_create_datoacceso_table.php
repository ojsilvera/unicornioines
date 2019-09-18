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
            $table->bigIncrements('idDatoAcceso');
            $table->string('userName', 50);
            $table->string('password', 10);
            $table->bigInteger('rolid')->unsigned();
            $table->foreign('rolid')->references('idRol')->on('rol');
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