<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRollaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollaccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rolid')->unsigned();
            $table->foreign('rolid')->references('id')->on('rol');
            $table->bigInteger('accionid')->unsigned();
            $table->foreign('accionid')->references('id')->on('acciones');
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
        Schema::dropIfExists('rollaccion');
    }
}
