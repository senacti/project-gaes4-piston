<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Tarea;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Mecanico;
use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Http\Request;

/**
 * Class VentaController
 * @package App\Http\Controllers
 */
class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::paginate();

        return view('venta.index', compact('ventas'))
            ->with('i', (request()->input('page', 1) - 1) * $ventas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = new Venta();
        $servicios=Servicio::pluck('nombre_servicio','id');
        $servicios1=Servicio::pluck('precio_servicio','id');


        $productos=Producto::pluck('nombre_producto','id');
        $productos1=Producto::pluck('cantidad_productos','id');
        $productos2=Producto::pluck('precio_producto','id');

        $mecanicos=Mecanico::pluck('nombre','id');
        $mecanicos1=Mecanico::pluck('apellido','id');
        $mecanicos2=Mecanico::pluck('especialidad','id');



        $clientes=Cliente::pluck('nombre_cliente','id');
        $clientes1=Cliente::pluck('apellido_cliente','id');

        $vehiculos=Vehiculo::pluck('vehiculo_marca','id');
        $vehiculos1=Vehiculo::pluck('vehiculo_matricula','id');
        $vehiculos2=Vehiculo::pluck('vehiculo_modelo','id');
        $vehiculos3=Vehiculo::pluck('vehiculo_color','id');

        $tareas=Tarea::pluck('total_comision', 'id');
        return view('venta.create', compact('venta','clientes','clientes1','mecanicos','mecanicos1','mecanicos2','productos','productos1','productos2','servicios','servicios1','vehiculos','vehiculos1','vehiculos2','vehiculos3','tareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Venta::$rules);

        $venta = Venta::create($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'La venta se ha registrado de manera exitosa.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);

        $servicios=Servicio::pluck('nombre_servicio','id');
        $servicios1=Servicio::pluck('precio_servicio','id');


        $productos=Producto::pluck('nombre_producto','id');
        $productos1=Producto::pluck('cantidad_productos','id');
        $productos2=Producto::pluck('precio_producto','id');

        $mecanicos=Mecanico::pluck('nombre','id');
        $mecanicos1=Mecanico::pluck('apellido','id');
        $mecanicos2=Mecanico::pluck('especialidad','id');



        $clientes=Cliente::pluck('nombre_cliente','id');
        $clientes1=Cliente::pluck('apellido_cliente','id');

        $vehiculos=Vehiculo::pluck('vehiculo_marca','id');
        $vehiculos1=Vehiculo::pluck('vehiculo_matricula','id');
        $vehiculos2=Vehiculo::pluck('vehiculo_modelo','id');
        $vehiculos3=Vehiculo::pluck('vehiculo_color','id');

        $tareas=Tarea::pluck('total_comision', 'id');
        return view('venta.edit', compact('venta','clientes','clientes1','mecanicos','mecanicos1','mecanicos2','productos','productos1','productos2','servicios','servicios1','vehiculos','vehiculos1','vehiculos2','vehiculos3','tareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Venta $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        request()->validate(Venta::$rules);

        $venta->update($request->all());

        return redirect()->route('ventas.index')
            ->with('success', 'La venta se ha actualizado con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $venta = Venta::find($id)->delete();

        return redirect()->route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}
