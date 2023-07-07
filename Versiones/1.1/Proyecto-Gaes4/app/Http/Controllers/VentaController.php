<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\RedirectController;

class VentaController extends Controller
{
    public function index()
    {
        $datos['ventas'] = Venta::where('inhabilitado', false)->paginate(10);
        return view('venta.index', $datos);
    }


    public function pdf(Request $request)
{
    $criterio1 = $request->input('criterio1');
    $criterio2 = $request->input('criterio2');

    $ventas = Venta::where('inhabilitado', false); // Filtrar solo las ventas habilitadas

    // Aplica los criterios de filtrado si se proporcionaron
    if ($criterio1) {
        $ventas->whereDate('FechaDeSolicitud', $criterio1);
    }
    if ($criterio2) {
        $ventas->where('Mecanico', $criterio2);
    }

    $ventas = $ventas->paginate(10);

    $pdf = PDF::loadView('venta.pdf', ['ventas' => $ventas]);
    return $pdf->stream('PDFVentas-' . time() . '.pdf');
}

    public function create()
    {
        return view('venta.create');
    }

    public function store(Request $request)
{
    $campos = [
        'Mecanico' => 'required|string|max:100',
        'Porcentaje' => 'required|string|max:200',
        'MarcaDelVehiculo' => 'required|string|max:50',
        'ModeloVehiculo' => 'required|string|max:50',
        'Matricula' => 'required|string|max:10',
        'Vin' => 'required|string|max:50',
        'FechaDeSolicitud' => 'required|date',
        'Servicio' => 'array', // Actualiza la validación para permitir un array
        'Producto' => 'required|array|min:1',
        'Servicio' => 'required|array|min:1',
        'Total' => 'required|string|max:99999999999999',
    ];

    $mensaje = [
        'required' => 'El :attribute es requerido',
        'MarcaDelVehiculo.required' => 'La marca del vehiculo es requerida ',
        'Matricula.required' => 'La matricula es requerida',
        'Producto.required' => 'Selecciona al menos un producto',
        'Servicio.required' => 'Selecciona al menos un servicio',
        'FechaDeSolicitud.required' => 'La Fecha es requerida'
    ];

    $this->validate($request, $campos, $mensaje);

    $datosVenta = $request->except('_token');

    // Convierte el array de servicios en una cadena separada por comas
    $datosVenta['Servicio'] = implode(PHP_EOL, $request->input('Servicio'));


    // Convierte el array de productos en una cadena separada por comas
    $datosVenta['Producto'] = implode(PHP_EOL, $request->input('Producto'));

    Venta::insert($datosVenta);

    return redirect('venta')->with('mensaje', 'Venta agregada con éxito!');
}

public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        return view('venta.edit', compact('venta'));
    }



public function update(Request $request, $id)
{
    $campos = [
        'Mecanico' => 'required|string|max:100',
        'Porcentaje' => 'required|string|max:200',
        'MarcaDelVehiculo' => 'required|string|max:50',
        'ModeloVehiculo' => 'required|string|max:50',
        'Matricula' => 'required|string|max:10',
        'Vin' => 'required|string|max:50',
        'FechaDeSolicitud' => 'required|date',
        'Producto' => 'required|array|min:1', // Actualiza la validación para permitir un array
        'Servicio' => 'required|array|min:1',
        'Total' => 'required|string|max:99999999999999',
    ];

    $mensaje = [
        'required' => 'El :attribute es requerido',
        'MarcaDelVehiculo.required' => 'La marca del vehiculo es requerida ',
        'Matricula.required' => 'La matricula es requerida',
        'Producto.required' => 'Selecciona al menos un producto',
        'Servicio.required' => 'Selecciona al menos un servicio',
        'FechaSolicitud.required' => 'La Fecha es requerida',
    ];

    $this->validate($request, $campos, $mensaje);

    $datosVenta = $request->except(['_token','_method']);

    // Convierte el array de servicios en una cadena separada por comas
    $datosVenta['Servicio'] = implode(',', $request->input('Servicio'));

    // Convierte el array de productos en una cadena separada por comas
    $datosVenta['Producto'] = implode(',', $request->input('Producto'));

    Venta::where('id', '=', $id)->update($datosVenta);

    return redirect()->route('venta.index')->with('mensaje', 'Venta actualizada con éxito');
}

public function destroy($id)
{
    $venta = Venta::findOrFail($id);
    $venta->inhabilitado = true;
    $venta->save();
    return redirect()->route('venta.index')->with('mensaje', 'Venta inhabilitada con éxito');
}
}

