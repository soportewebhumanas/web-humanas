<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantias', function (Blueprint $table) {
            $table->id();
            $table->string('organismo_solicitante');
            $table->integer('cantidad');
            $table->integer('duracion');
            $table->string('destinatario');
            $table->dateTime('inicio_inscripcion');
            $table->dateTime('fin_inscripcion');
            $table->json('requisitos');
            $table->json('tareas');
            $table->string('formulario_inscripcion');
            $table->json('documentacion_obligatoria');
            $table->longText('observaciones');
            $table->boolean('activo');
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
        Schema::dropIfExists('pasantias');
    }
}
