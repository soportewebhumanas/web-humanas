<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('esPeriodica');
            $table->string('tipoDePublicacion')->nullable();
            $table->integer('anio');
            $table->string('editorial')->nullable();
            $table->json('autor')->nullable();
            $table->json('compilador')->nullable();
            $table->json('coordinador')->nullable();
            $table->json('editor')->nullable();
            $table->longText('resumen');
            $table->string('enlace')->nullable();
            $table->boolean('activo');
            $table->string('imagen');
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
        Schema::dropIfExists('publicaciones');
    }
}
