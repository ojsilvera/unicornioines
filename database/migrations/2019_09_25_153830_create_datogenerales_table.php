<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatogeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datogenerales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fechaNacimiento');
            $table->bigInteger('institucionid')->unsigned();
            $table->foreign('institucionid')->references('id')->on('institucion');
            $table->bigInteger('generoid')->unsigned();
            $table->foreign('generoid')->references('id')->on('genero');
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
        Schema::dropIfExists('datogenerales');
    }
}
