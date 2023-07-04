<?php

namespace App\Http\Controllers;

use App\Models\venta;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\RedirectController;

class VentaController extends Controller
{
    
    public function index()
    {
        //
        $datos['ventas']=Venta::paginate(5);
        return view('venta.index',$datos );
    }

    public function pdf()
    {
        $ventas = Venta::paginate(5);
        $pdf = PDF::loadView('venta.pdf',['ventas'=>$ventas]);
        return $pdf->stream('PDFVentas-'.time().'.pdf');
    }
    
    public function create()
    {
        //
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
            $campos=[
                'Mecanico'=>'required|string|max:100',
                'Porcentaje'=>'required|string|max:200',
                'MarcaDelVehiculo'=>'required|string|max:50',
                'ModeloVehiculo'=>'required|string|max:50',
                'Matricula'=>'required|string|max:10',
                'Vin'=>'required|string|max:50',
                'FechaDeSolicitud'=>'required|date',
                'Servicio'=>'required|string|max:50',
                'Producto'=>'required|string|max:50',
                'Total'=>'required|string|max:99999999999999',
            ];
            $mensaje=[
                'required'=>'El :attribute es requerido',
                'MarcaDelVehiculo.required'=>'La marca del vehiculo es requerida ',
                'Matricula.required'=>'La matricula es requerida',
                'FechaDeSolicitud.required'=>'La Fecha es requerida'
            ];
            
            $this->validate($request, $campos, $mensaje);




        //$datosVenta = request()->all();
        $datosVenta = request()->except('_token');
        venta::insert($datosVenta);

        //return response()->json($datosVenta);
        return redirect('venta')->with('mensaje','Venta agregada con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $venta = Venta::findOrFail($id);
        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Mecanico'=>'required|string|max:100',
            'Porcentaje'=>'required|string|max:200',
            'MarcaDelVehiculo'=>'required|string|max:50',
            'ModeloVehiculo'=>'required|string|max:50',
            'Matricula'=>'required|string|max:10',
            'Vin'=>'required|string|max:50',
            'FechaDeSolicitud'=>'required|date',
            'Servicio'=>'required|string|max:50',
            'Producto'=>'required|string|max:50',
            'Total'=>'required|string|max:99999999999999',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'MarcaDelVehiculo.required'=>'La marca del vehiculo es requerida ',
            'Matricula.required'=>'La matricula es requerida',
            'FechaDeSolicitud.required'=>'La Fecha es requerida'
        ];
        
        $this->validate($request, $campos, $mensaje);





        //
        //$venta = Venta::FindOrFail($id);
        //$venta->update($request->all());return redirect()->route('venta.index');
        $datosVenta = request()->except(['_token','_method']);
        Venta::where('id','=', $id)->update($datosVenta);

        $venta = Venta::findOrFail($id);
        //return view('venta.edit', compact('venta'));

        return redirect()->route('venta.index')->with('mensaje','Venta actualizada con exito');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Venta = venta::findOrFail($id);
        $Venta->delete();
        return redirect()->route('venta.index')->with('mensaje','Venta eliminada con exito');
    }
}
