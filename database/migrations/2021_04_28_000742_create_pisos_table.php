<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->unsignedBigInteger('numero_piso');
            $table->unsignedBigInteger('numero_apto_piso');
            $table->string('nombre');
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
        Schema::dropIfExists('pisos');
    }
}
