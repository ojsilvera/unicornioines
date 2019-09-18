<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigInteger('documento');
            $table->bigInteger('tpDocumentoid')->unsigned();
            $table->foreign('tpDocumentoid')->references('idTpDocumento')->on('tp_documento');
            $table->string('primerNombre', 50);
            $table->string('segundoNombre', 50)->nullable();
            $table->string('primerApellido', 50);
            $table->string('segundoApellido', 50)->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
