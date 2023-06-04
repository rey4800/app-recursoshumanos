<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclutamiento_vacantes', function (Blueprint $table) {
            $table->id('id_reclutamiento_vacantes');
            $table->string('nombre_posicion', 200);
            $table->integer('numero_vacantes');
            $table->date('fecha_fin_aplicacion');
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
        Schema::dropIfExists('reclutamiento_vacantes');
    }
};
