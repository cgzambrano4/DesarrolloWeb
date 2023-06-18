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
        Schema::create('factura', function (Blueprint $table) {
            
            //Borrar la tabla en cascada
            $table->engine="InnoDB";

            $table->bigIncrements('Id_Factura');

            $table->bigInteger('Empleado_Id')->unsigned(); //Referencia externa al campo relacionado
            $table->bigInteger('Cliente_Id')->unsigned(); //Referencia externa al campo relacionado
            $table->bigInteger('Auto_Id')->unsigned(); //Referencia externa al campo relacionado

            $table->string('Fecha_Alquiler');
            $table->string('Fecha_Devolución');
            $table->string('Monto_Pagado');
            
            $table->bigInteger('Metodo_Pago_Id')->unsigned(); //Referencia externa al campo relacionado

            $table->timestamps();

            $table->foreign('Empleado_Id')->references('Id_Empleado')->on('empleado'); //se crea la realción
            $table->foreign('Cliente_Id')->references('Id_Cliente')->on('cliente')->onDelete( "cascade"); //se crea la realción
            $table->foreign('Auto_Id')->references('Id_Auto')->on('auto'); //se crea la realción
            $table->foreign('Metodo_Pago_Id')->references('Id_Metodo_Pago')->on('metodo_pago'); //se crea la realción
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
