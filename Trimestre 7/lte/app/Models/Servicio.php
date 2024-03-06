<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $id
 * @property $nombre_servicio
 * @property $precio_servicio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{

    static $rules = [
		'nombre_servicio' => 'required',
		'precio_servicio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_servicio','precio_servicio'];

    public function tareas()
    {
        return $this->hasMany('App\Models\Servicio', 'precio_servicio_id', 'id');
        return $this->hasMany('App\Models\Servicio', 'nombre_servicio_id', 'id');
    }

    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'precio_servicio_id', 'id');
        return $this->hasMany('App\Models\Venta', 'nombre_servicio_id', 'id');
    }

}
