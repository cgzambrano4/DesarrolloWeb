<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Creación de la tabla
        Schema::create('empleado', function (Blueprint $table) {

            //Borrar la tabla en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('Id_Empleado');
            $table->string('Nombre_Empleado');
            $table->string('Apellido_Empleado');
            $table->string('Cedula_Empleado')->unique();
            $table->string('Direccion_Empleado');
            $table->string('Telefono_Empleado')->unique();
            $table->string('Correo_Electronico_Empleado')->unique();
            $table->date('Fecha_Contrato');
            $table->float('Salario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
