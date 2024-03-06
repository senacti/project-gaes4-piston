<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $nombre_empleado_id
 * @property $apellido_empleado_id
 * @property $especialidad_id
 * @property $nombre_cliente_id
 * @property $apellido_cliente_id
 * @property $vehiculo_marca_id
 * @property $vehiculo_modelo_id
 * @property $vehiculo_matricula_id
 * @property $vehiculo_color_id
 * @property $nombre_servicio_id
 * @property $precio_servicio_id
 * @property $nombre_producto_id
 * @property $cantidad_producto_id
 * @property $precio_producto_id
 * @property $total_comision_id
 * @property $fecha_venta
 * @property $total_venta
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Cliente $cliente
 * @property Mecanico $mecanico
 * @property Mecanico $mecanico
 * @property Mecanico $mecanico
 * @property Producto $producto
 * @property Producto $producto
 * @property Producto $producto
 * @property Servicio $servicio
 * @property Servicio $servicio
 * @property Tarea $tarea
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @property Vehiculo $vehiculo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{

    static $rules = [
		'nombre_empleado_id' => 'required',
		'apellido_empleado_id' => 'required',
		'especialidad_id' => 'required',
		'nombre_cliente_id' => 'required',
		'apellido_cliente_id' => 'required',
		'vehiculo_marca_id' => 'required',
		'vehiculo_modelo_id' => 'required',
		'vehiculo_matricula_id' => 'required',
		'vehiculo_color_id' => 'required',
		'nombre_servicio_id' => 'required',
		'precio_servicio_id' => 'required',
		'nombre_producto_id' => 'required',
		'cantidad_producto_id' => 'required',
		'precio_producto_id' => 'required',
		'total_comision_id' => 'required',
		'fecha_venta' => 'required',
		'total_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_empleado_id','apellido_empleado_id','especialidad_id','nombre_cliente_id','apellido_cliente_id','vehiculo_marca_id','vehiculo_modelo_id','vehiculo_matricula_id','vehiculo_color_id','nombre_servicio_id','precio_servicio_id','nombre_producto_id','cantidad_producto_id','precio_producto_id','total_comision_id','fecha_venta','total_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'apellido_cliente_id');
        return $this->hasOne('App\Models\Cliente', 'id', 'nombre_cliente_id');
    }

    public function mecanico()
    {
        return $this->hasOne('App\Models\Mecanico', 'id', 'apellido_empleado_id');
        return $this->hasOne('App\Models\Mecanico', 'id', 'nombre_empleado_id');
        return $this->hasOne('App\Models\Mecanico', 'id', 'especialidad_id');


    }

    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'precio_producto_id');
        return $this->hasOne('App\Models\Producto', 'id', 'cantidad_producto_id');
        return $this->hasOne('App\Models\Producto', 'id', 'nombre_producto_id');


    }

    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'nombre_servicio_id');
        return $this->hasOne('App\Models\Servicio', 'id', 'precio_servicio_id');

    }

    public function tarea()
    {
        return $this->hasOne('App\Models\Tarea', 'id', 'total_comision_id');
    }

    public function vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_matricula_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_modelo_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_color_id');
        return $this->hasOne('App\Models\Vehiculo', 'id', 'vehiculo_marca_id');



    }





}
