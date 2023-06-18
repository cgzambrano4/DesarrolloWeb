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
        Schema::create('metodo_pago', function (Blueprint $table) {

            //Borrar la tabla en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('Id_Metodo_Pago');
            $table->string('Metodo');
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
