<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factcat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('factorid')->unsigned();
            $table->foreign('factorid')->references('id')->on('factor');
            $table->bigInteger('categoriaid')->unsigned();
            $table->foreign('categoriaid')->references('id')->on('categoria');
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
        Schema::dropIfExists('factcat');
    }
}
