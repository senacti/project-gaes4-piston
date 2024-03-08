<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Cliente
 *
 * @property $id
 * @property $cedula_cliente
 * @property $nombre_cliente
 * @property $apellido_cliente
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $ciudad
 * @property $vehiculo_marca_id
 * @property $vehiculo_modelo_id
 * @property $vehiculo_matricula_id
 * @property $vehiculo_color_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{

    static $rules = [
		'cedula_cliente' => 'required',
		'nombre_cliente' => 'required',
		'apellido_cliente' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'ciudad' => 'required',
		'vehiculo_marca_id' => 'required',
		'vehiculo_modelo_id' => 'required',
		'vehiculo_matricula_id' => 'required',
		'vehiculo_color_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula_cliente','nombre_cliente','apellido_cliente','direccion','telefono','email','ciudad','vehiculo_marca_id','vehiculo_modelo_id','vehiculo_matricula_id','vehiculo_color_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_marca_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_matricula_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_modelo_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_color_id');
    }

    public function tareas()
    {
        return $this->hasMany('App\Models\Tarea', 'nombre_cliente_id', 'id');
        return $this->hasMany('App\Models\Tarea', 'apellido_cliente_id', 'id');
    }





}
