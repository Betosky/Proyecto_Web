<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('documento_id')->unsigned();
            $table->integer('condicion_id')->unsigned();
            $table->integer('administrador_id')->unsigned();
            $table->string('nombre');
            $table->text('descripcion');

            $table->foreign('documento_id')->references('id')->on('documento');
            $table->foreign('condicion_id')->references('id')->on('condicion');
            $table->foreign('administrador_id')->references('id')->on('administrador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tramite');
    }
}
