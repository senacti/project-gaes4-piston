<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $vehiculo_marca
 * @property $vehiculo_modelo
 * @property $Vehiculo_matricula
 * @property $Vehiculo_color
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente[] $clientes
 * @property Cliente[] $clientes
 * @property Cliente[] $clientes
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{

    static $rules = [
		'vehiculo_marca' => 'required',
		'vehiculo_modelo' => 'required',
		'Vehiculo_matricula' => 'required',
		'Vehiculo_color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['vehiculo_marca','vehiculo_modelo','Vehiculo_matricula','Vehiculo_color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'vehiculo_modelo_id', 'id');
        return $this->hasMany('App\Models\Cliente', 'vehiculo_color_id', 'id');
        return $this->hasMany('App\Models\Cliente', 'vehiculo_marca_id', 'id');
        return $this->hasMany('App\Models\Cliente', 'vehiculo_matricula_id', 'id');

    }

    public function tareas()
    {
        return $this->hasOne('App\Models\Vehiculo', 'vehiculo_marca_id', 'id');
        return $this->hasOne('App\Models\Vehiculo', 'vehiculo_matricula_id', 'id');
        return $this->hasOne('App\Models\Vehiculo', 'vehiculo_modelo_id', 'id' );
        return $this->hasOne('App\Models\Vehiculo', 'vehiculo_color_id', 'id');

    }

    public function ventas()
    {
        return $this->hasOne('App\Models\Venta', 'vehiculo_marca_id', 'id');
        return $this->hasOne('App\Models\Venta', 'vehiculo_matricula_id', 'id');
        return $this->hasOne('App\Models\Venta', 'vehiculo_modelo_id', 'id' );
        return $this->hasOne('App\Models\Venta', 'vehiculo_color_id', 'id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */



}
