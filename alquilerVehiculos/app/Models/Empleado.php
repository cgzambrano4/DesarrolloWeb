<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $Id_Empleado
 * @property $Nombre_Empleado
 * @property $Apellido_Empleado
 * @property $Cedula_Empleado
 * @property $Direccion_Empleado
 * @property $Telefono_Empleado
 * @property $Correo_Electronico_Empleado
 * @property $Fecha_Contrato
 * @property $Salario
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'Id_Empleado' => 'required',
		'Nombre_Empleado' => 'required',
		'Apellido_Empleado' => 'required',
		'Cedula_Empleado' => 'required',
		'Direccion_Empleado' => 'required',
		'Telefono_Empleado' => 'required',
		'Correo_Electronico_Empleado' => 'required',
		'Fecha_Contrato' => 'required',
		'Salario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Empleado','Nombre_Empleado','Apellido_Empleado','Cedula_Empleado','Direccion_Empleado','Telefono_Empleado','Correo_Electronico_Empleado','Fecha_Contrato','Salario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'Empleado_Id', 'Id_Empleado');
    }
    

}
