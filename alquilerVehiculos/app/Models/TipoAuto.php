<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoAuto
 *
 * @property $Id_Tipo_Auto
 * @property $Tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Auto[] $autos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoAuto extends Model
{
    
    static $rules = [
		'Id_Tipo_Auto' => 'required',
		'Tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Tipo_Auto','Tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autos()
    {
        return $this->hasMany('App\Models\Auto', 'Tipo_Auto_Id', 'Id_Tipo_Auto');
    }
    

}
