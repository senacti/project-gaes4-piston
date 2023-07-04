<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mecanico;
use Barryvdh\DomPDF\Facade\Pdf;

class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mecanicos=Mecanico::paginate(5);
        return view('mecanico.index')->with('mecanicos',$mecanicos);
        
    }
 public function pdf(){
    $mecanicos=Mecanico::paginate();
    $pdf = Pdf::loadView('mecanico.pdf',['mecanicos'=>$mecanicos]);
    return $pdf->stream('PDFMecanicos-'.time().'.pdf');
 }
    /**
     * Show the form for creating a new resource.
     * 
     */
    public function create()
    {
        return view('mecanico.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     */
    public function store(Request $request)
    {
       $mecanicos=new Mecanico();
       $mecanicos->cedula=$request->get('cedula'); 
       $mecanicos->nombre=$request->get('nombre');
       $mecanicos->apellido=$request->get('apellido');  
       $mecanicos->direccion=$request->get('direccion'); 
       $mecanicos->telefono=$request->get('telefono'); 
       $mecanicos->email=$request->get('email'); 
       $mecanicos->ciudad=$request->get('ciudad'); 
       $mecanicos->especialidad=$request->get('especialidad'); 


       $mecanicos->save();

       return redirect('mecanicos')->with('mensaje','Mecanico agregado con exito!');

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mecanico=Mecanico::find($id);
        return view('mecanico.edit')->with('mecanico',$mecanico);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
            $mecanico= Mecanico::find($id);
            
        
            $mecanico->cedula=$request->get('cedula'); 
            $mecanico->nombre=$request->get('nombre');
            $mecanico->apellido=$request->get('apellido');  
            $mecanico->direccion=$request->get('direccion'); 
            $mecanico->telefono=$request->get('telefono'); 
            $mecanico->email=$request->get('email'); 
            $mecanico->ciudad=$request->get('ciudad'); 
            $mecanico->especialidad=$request->get('especialidad'); 
     
     
            $mecanico->save();
     
            return redirect('mecanicos')->with('mensaje','Mecanico actualizado con exito!');
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $mecanico= Mecanico::find($id);
        $mecanico->delete();
        return redirect('mecanicos')->with('mensaje','Mecanico inhabilitado con exito!');
    }
}
