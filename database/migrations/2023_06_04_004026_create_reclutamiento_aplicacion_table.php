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
        Schema::create('reclutamiento_aplicacion', function (Blueprint $table) {
            $table->id('id_reclutamiento_aplicacion');
            $table->integer('id_reclutamiento_vacantes');
            $table->integer('id_empleado');
            $table->date('fecha_aplicacion');
            $table->integer('id_departamento');
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
        
        Schema::dropIfExists('reclutamiento_aplicacion');
    }
};
