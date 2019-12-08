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
            $table->string('edad');
            $table->bigInteger('institucionid')->unsigned();
            $table->foreign('institucionid')->references('id')->on('institucion');
            $table->bigInteger('generoid')->unsigned();
            $table->foreign('generoid')->references('id')->on('genero');
            $table->bigInteger('rolid')->unsigned();
            $table->foreign('rolid')->references('id')->on('rol');
            $table->string('cargo',50)->nullable();
            $table->string('dependencia',50)->nullable();
            $table->string('antinst',50)->nullable();
            $table->string('antcargo',50)->nullable();
            $table->string('facultad',50)->nullable();
            $table->string('departamento',50)->nullable();
            $table->string('vinculacion',50)->nullable();
            $table->string('horasemana',50)->nullable();
            $table->string('carrera',50)->nullable();
            $table->string('semestre',50)->nullable();
            $table->string('semestreing',50)->nullable();
            $table->string('ingreso',50)->nullable();
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
