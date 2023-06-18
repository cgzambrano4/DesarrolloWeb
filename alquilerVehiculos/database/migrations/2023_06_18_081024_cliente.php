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
        //creación de la tabla
        Schema::create('cliente', function (Blueprint $table) {

            //Borrado en cascada
            $table->engine="InnoDB";
            
            $table->bigIncrements('Id_Cliente');
            $table->string('Nombre_Cliente');
            $table->string('Apellido_Cliente');
            $table->string('Cedula_Cliente')->unique();
            $table->string('Direccion_Cliente');
            $table->string('Telefono_CLiente')->unique();
            $table->string('Correo_Electronico_Cliente')->unique();
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
