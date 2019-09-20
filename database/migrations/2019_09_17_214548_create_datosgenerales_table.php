<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosgeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosgenerales', function (Blueprint $table) {
            $table->bigIncrements('idDtosGnel');
            $table->date('fechaNacimiento');
            $table->bigInteger('institucionid')->unsigned();
            $table->foreign('institucionid')->references('idInstitucion')->on('institucion');
            $table->bigInteger('generoid')->unsigned();
            $table->foreign('generoid')->references('id')->on('genero');
            $table->bigInteger('rolid')->unsigned();
            $table->foreign('rolid')->references('idRol')->on('rol');
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
        Schema::dropIfExists('datosgenerales');
    }
}
