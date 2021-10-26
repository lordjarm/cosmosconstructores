<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aptos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_apto_id');
            $table->foreign('tipo_apto_id')->references('id')->on('tipo_aptos');
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado_aptos');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->unsignedBigInteger('piso_id');
            $table->foreign('piso_id')->references('id')->on('pisos');
            $table->unsignedBigInteger('numero_apto');
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
        Schema::dropIfExists('aptos');
    }
}
