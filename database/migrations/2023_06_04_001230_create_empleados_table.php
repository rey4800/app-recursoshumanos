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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('usuario', 200)->nullable();
            $table->string('password', 200)->nullable();
            $table->string('documento', 200);
            $table->string('nombres', 200);
            $table->string('apellidos', 200);
            $table->string('telefono', 200)->nullable();
            $table->string('correo', 200)->nullable();
            $table->string('fecha_nacimiento', 200);
            $table->string('direccion', 200);
            $table->string('nacionalidad', 200);
            $table->float('salario')->nullable();
            $table->biginteger('id_departamento');
            $table->string('asignar_puesto', 200);
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
       
        Schema::dropIfExists('empleados');
    }
};
