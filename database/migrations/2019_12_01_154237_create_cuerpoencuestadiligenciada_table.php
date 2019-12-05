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
            $table->bigInteger('prrespid')->unsigned();
            $table->foreign('prrespid')->references('id')->on('prresp');
            $table->bigInteger('prresp2id')->unsigned();
            $table->foreign('prresp2id')->references('id')->on('prresp');
            $table->bigInteger('prresp3id')->unsigned();
            $table->foreign('prresp3id')->references('id')->on('prresp');
            $table->bigInteger('prresp4id')->unsigned();
            $table->foreign('prresp4id')->references('id')->on('prresp');
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
