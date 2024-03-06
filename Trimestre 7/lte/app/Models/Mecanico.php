<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mecanico
 *
 * @property $id
 * @property $cedula
 * @property $nombre
 * @property $apellido
 * @property $direccion
 * @property $telefono
 * @property $email
 * @property $ciudad
 * @property $especialidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mecanico extends Model
{

    static $rules = [
		'cedula' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'ciudad' => 'required',
		'especialidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombre','apellido','direccion','telefono','email','ciudad','especialidad'];

    public function tareas()
    {
        return $this->hasMany('App\Models\Mecanico', 'nombre_empleado_id', 'id');
        return $this->hasMany('App\Models\Mecanico', 'apellido_empleado_id', 'id');
        return $this->hasMany('App\Models\Mecanico', 'especialidad_id', 'id');
    }

    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'nombre_empleado_id', 'id');
        return $this->hasMany('App\Models\Venta', 'apellido_empleado_id', 'id');
        return $this->hasMany('App\Models\Venta', 'especialidad_id', 'id');
    }

}
