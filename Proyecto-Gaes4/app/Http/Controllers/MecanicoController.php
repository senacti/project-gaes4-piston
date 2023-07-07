<?php

namespace App\Http\Controllers;

use App\Models\Mecanico;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\RedirectController;

class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /*  $datos['mecanicos'] =Mecanico::where('inhabilitado', false)->paginate(10); */
        $datos['mecanicos']=Mecanico::where('inhabilitado', false)->paginate();
        return view('mecanico.index', $datos);
    }



    public function pdf(Request $request)
    {
        $criterio1 = $request->input('criterio1');
        $criterio2 = $request->input('criterio2');

        $mecanicos = Mecanico::where('inhabilitado', false); // Filtrar solo las ventas habilitadas

        // Aplica los criterios de filtrado si se proporcionaron
        if ($criterio1) {
            $mecanicos->whereDate('nombre', $criterio1);
        }
        if ($criterio2) {
            $mecanicos->where('especialidad', $criterio2);
        }

        $mecanicos = $mecanicos->paginate(10);

        $pdf = PDF::loadView('mecanico.pdf', ['mecanicos' => $mecanicos]);
        return $pdf->stream('PDFMecanicos-' . time() . '.pdf');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mecanico.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           /*$datosMecanico = request()->except('_token');
           Mecanico::insert($datosMecanico);

        return response()->json($datosMecanico);*/
     $campos=[
        'cedula'=>'required|string|min:9',
        'nombre'=>'required|string|',
        'apellido'=>'required|string|',
        'direccion'=>'required|string|',
        'telefono'=>'required|string|min:9',
        'email'=>'required|email|',
        'ciudad'=>'required|string|',
        'especialidad'=>'required|string|',
     ];
$mensaje=[ 'required'=>'Su :attribute es requerido '];

  $this->validate($request,$campos,$mensaje);

  $datosMecanico = request()->except('_token');
  mecanico::insert($datosMecanico);

  return  redirect('mecanicos')->with('mensaje','Mecanico agregado con exito');
  

    }

    /**
     * Display the specified resource.
     */
    public function show(Mecanico $mecanico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mecanico=Mecanico::findOrFail($id);
        return view('mecanico.edit',compact('mecanico'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos=[
        'cedula'=>'required|string|min:9',
        'nombre'=>'required|string|',
        'apellido'=>'required|string|',
        'direccion'=>'required|string|',
        'telefono'=>'required|string|min:9',
        'email'=>'required|email|',
        'ciudad'=>'required|string|',
        'especialidad'=>'required|string|',
        ];
    $mensaje=[ 'required'=>'Su :attribute es requerido '];

      $this->validate($request,$campos,$mensaje);


        $datosMecanico= request()->except(['_token','_method']);
        Mecanico::where('id','=',$id)->update($datosMecanico);

        $mecanico=Mecanico::findOrFail($id);
        /*return view('mecanico.edit',compact('mecanico'));*/
        return redirect('mecanicos')->with('Mensaje', 'Dato actualizado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        $mecanico = mecanico::findOrFail($id);
        $mecanico-> inhabilitado = true;
        $mecanico->save();
        return redirect()->route('mecanicos.index')->with('mensaje', 'Mecanico inhabilitado con éxito');



        /* Mecanico::destroy($id);
         return redirect('mecanico')->with('mensaje','¡Dato inhabilitado!');*/
    }
}