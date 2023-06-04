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
        Schema::create('haberes', function (Blueprint $table) {
            $table->id('id_haberes');
            $table->string('nombre_haberes', 200);
            $table->double('cantidad');
            $table->integer('id_empleado');
            $table->date('fecha');
            $table->integer('id_nomina');
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
      
        Schema::dropIfExists('haberes');
    }
};
