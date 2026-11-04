<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignsToEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table
                ->foreign('lugar_id')
                ->references('id')
                ->on('lugares');

            $table
                ->foreign('modalidad_id')
                ->references('id')
                ->on('modalidades');

            $table
                ->foreign('tipo_id')
                ->references('id')
                ->on('tipos_eventos');
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
            $table->dropForeign(['lugar_id']);
            $table->dropForeign(['modalidad_id']);
            $table->dropForeign(['tipo_id']);
        });
    }
}
