<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Mecanico;
use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Http\Request;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::paginate();

        return view('tarea.index', compact('tareas'))
            ->with('i', (request()->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea();
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
        return view('tarea.create', compact('tarea','clientes','clientes1','mecanicos','mecanicos1','mecanicos2','productos','productos1','productos2','servicios','servicios1','vehiculos','vehiculos1','vehiculos2','vehiculos3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarea::$rules);

        $tarea = Tarea::create($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'La tarea se ha registrado de manera exitosa.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);

        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);

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
        return view('tarea.edit', compact('tarea','clientes','clientes1','mecanicos','mecanicos1','mecanicos2','productos','productos1','productos2','servicios','servicios1','vehiculos','vehiculos1','vehiculos2','vehiculos3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarea $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        request()->validate(Tarea::$rules);

        $tarea->update($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'La tarea se ha actualizado con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
}
