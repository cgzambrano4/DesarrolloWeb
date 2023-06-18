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
        //Creación tabla
        Schema::create('auto', function (Blueprint $table) {

            //Borrar la tabla en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('Id_Auto');

            $table->bigInteger('Tipo_Auto_Id')->unsigned(); //Referencia externa al campo relacionado

            $table->string('Marca');
            $table->string('Modelo');
            $table->integer('Anio');
            $table->string('Placa')->unique();
            $table->boolean('Estado_Disponibilidad');
            $table->timestamps();

            $table->foreign('Tipo_Auto_Id')->references('Id_Tipo_Auto')->on('tipo_auto'); //se crea la relación

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
