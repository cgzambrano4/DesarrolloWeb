<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $Id_Factura
 * @property $Empleado_Id
 * @property $Cliente_Id
 * @property $Auto_Id
 * @property $Fecha_Alquiler
 * @property $Fecha_Devolución
 * @property $Monto_Pagado
 * @property $Metodo_Pago_Id
 * @property $created_at
 * @property $updated_at
 *
 * @property Auto $auto
 * @property Cliente $cliente
 * @property Empleado $empleado
 * @property MetodoPago $metodoPago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'Id_Factura' => 'required',
		'Empleado_Id' => 'required',
		'Cliente_Id' => 'required',
		'Auto_Id' => 'required',
		'Fecha_Alquiler' => 'required',
		'Fecha_Devolución' => 'required',
		'Monto_Pagado' => 'required',
		'Metodo_Pago_Id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Factura','Empleado_Id','Cliente_Id','Auto_Id','Fecha_Alquiler','Fecha_Devolución','Monto_Pagado','Metodo_Pago_Id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function auto()
    {
        return $this->hasOne('App\Models\Auto', 'Id_Auto', 'Auto_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'Id_Cliente', 'Cliente_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'Id_Empleado', 'Empleado_Id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function metodoPago()
    {
        return $this->hasOne('App\Models\MetodoPago', 'Id_Metodo_Pago', 'Metodo_Pago_Id');
    }
    

}
