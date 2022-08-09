<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formulario extends Migration
{
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->date('fecha_inscripcion');
            $table->integer('edad');
            $table->integer('costo');
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
        Schema::dropIfExists('formulario');
    }
}
