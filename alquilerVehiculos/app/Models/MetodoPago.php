<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetodoPago
 *
 * @property $Id_Metodo_Pago
 * @property $Metodo
 * @property $created_at
 * @property $updated_at
 *
 * @property Factura[] $facturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MetodoPago extends Model
{
    
    static $rules = [
		'Id_Metodo_Pago' => 'required',
		'Metodo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Metodo_Pago','Metodo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'Metodo_Pago_Id', 'Id_Metodo_Pago');
    }
    

}
