<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $Id_Cliente
 * @property $Nombre_Cliente
 * @property $Apellido_Cliente
 * @property $Cedula_Cliente
 * @property $Direccion_Cliente
 * @property $Telefono_CLiente
 * @property $Correo_Electronico_Cliente
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'Id_Cliente' => 'required',
		'Nombre_Cliente' => 'required',
		'Apellido_Cliente' => 'required',
		'Cedula_Cliente' => 'required',
		'Direccion_Cliente' => 'required',
		'Telefono_CLiente' => 'required',
		'Correo_Electronico_Cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Cliente','Nombre_Cliente','Apellido_Cliente','Cedula_Cliente','Direccion_Cliente','Telefono_CLiente','Correo_Electronico_Cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'Cliente_Id', 'Id_Cliente');
    }
    

}
