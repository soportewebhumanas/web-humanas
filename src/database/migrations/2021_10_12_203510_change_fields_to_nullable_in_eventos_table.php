<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsToNullableInEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->string('resolucion')->nullable()->change();
            $table->longText('observaciones')->nullable()->change();
            $table->dateTime('fecha_inicio')->nullable()->change();
            $table->integer('carga_horaria')->nullable()->change();
            $table->string('imagen')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            //
            $table->string('imagen')->nullable(false)->change();
            $table->integer('carga_horaria')->nullable(false)->change();
            $table->dateTime('fecha_inicio')->nullable(false)->change();
            $table->string('resolucion')->nullable(false)->change();
            $table->longText('observaciones')->nullable(false)->change();
        });
    }
}
