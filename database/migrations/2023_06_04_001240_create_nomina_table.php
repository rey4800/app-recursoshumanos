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
        Schema::create('nomina', function (Blueprint $table) {
            $table->id('id_nomina');
            $table->integer('id_departamento');
            $table->integer('id_empleado');
            $table->string('meses', 200);
            $table->string('year', 200);
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
       

        Schema::dropIfExists('nomina');
    }
};
