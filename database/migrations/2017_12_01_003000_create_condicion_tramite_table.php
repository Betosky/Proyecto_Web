<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondicionTramiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condicion_tramite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condicion_id')->unsigned();
            $table->integer('tramite_id')->unsigned();

            $table->foreign('condicion_id')->references('id')->on('condicion');
            $table->foreign('tramite_id')->references('id')->on('tramite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('condicion_tramite');
    }
}
