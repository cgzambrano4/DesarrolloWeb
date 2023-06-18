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
        //Creación del schema
        Schema::create('tipo_Auto', function (Blueprint $table) {

            //Borrar la tabla en cascada
            $table->engine="InnoDB";
            
            $table->bigIncrements('Id_Tipo_Auto');
            $table->string('Tipo');
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
