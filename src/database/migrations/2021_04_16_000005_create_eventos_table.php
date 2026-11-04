<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('grado');
            $table->string('curricular');
            $table->foreignId('modalidad_id');
            $table->foreignId('lugar_id')->nullable();
            $table->foreignId('tipo_id');
            $table->foreignId('programa_id')->nullable();
            $table->json('responsables');
            $table->json('colaboradores')->nullable();
            $table->json('destinatarios')->nullable();
            $table->integer('carga_horaria');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin')->nullable();
            $table->string('resolucion');
            $table->string('enlace_inscripcion')->nullable();
            $table->string('imagen');
            $table->longText('observaciones');
            $table->boolean('active');

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
        Schema::dropIfExists('eventos');
    }
}
