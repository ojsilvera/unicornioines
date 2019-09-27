<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuerpoencuestadiligenciadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerpoencuestadiligenciada', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cabEncuestaDilid')->unsigned();
            $table->foreign('cabEncuestaDilid')->references('id')->on('cabencuestadiligenciada');
            $table->bigInteger('cuerpFormEncuestaid')->unsigned();
            $table->foreign('cuerpFormEncuestaid')->references('id')->on('cuerpoformencuesta');
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
        Schema::dropIfExists('cuerpoencuestadiligenciada');
    }
}
