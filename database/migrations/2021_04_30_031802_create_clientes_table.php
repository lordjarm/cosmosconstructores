<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('nombre');
            $table->unsignedBigInteger('cedula')->unique();
            $table->unsignedBigInteger('celular')->unique();
            $table->string('direccion')->unique();
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->unsignedBigInteger('piso_id');
            $table->foreign('piso_id')->references('id')->on('pisos');
            $table->unsignedBigInteger('apto_id');
            $table->foreign('apto_id')->references('id')->on('aptos');
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
        Schema::dropIfExists('clientes');
    }
}
