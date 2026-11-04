<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlamadosSeleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llamadosSeleccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->string('cargo');
            $table->string('dedicacion');
            $table->string('asignatura');
            $table->string('departamento');
            $table->string('carrera');
            $table->string('plan');
            $table->longText('observacion');
            $table->dateTime('inicio_inscripcion');
            $table->dateTime('fin_inscripcion');
            $table->string('enlace_inscripcion');
            $table->boolean('activo');
            $table->string('resolucion');
             $table->string('acta_final')->default('');
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
        Schema::dropIfExists('llamadosSeleccion');
    }
}
