<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Auto
 *
 * @property $Id_Auto
 * @property $Tipo_Auto_Id
 * @property $Marca
 * @property $Modelo
 * @property $Anio
 * @property $Placa
 * @property $Estado_Disponibilidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @property TipoAuto $tipoAuto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Auto extends Model
{
    
    static $rules = [
		'Id_Auto' => 'required',
		'Tipo_Auto_Id' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Anio' => 'required',
		'Placa' => 'required',
		'Estado_Disponibilidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Auto','Tipo_Auto_Id','Marca','Modelo','Anio','Placa','Estado_Disponibilidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'Auto_Id', 'Id_Auto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoAuto()
    {
        return $this->hasOne('App\Models\TipoAuto', 'Id_Tipo_Auto', 'Tipo_Auto_Id');
    }
    

}
