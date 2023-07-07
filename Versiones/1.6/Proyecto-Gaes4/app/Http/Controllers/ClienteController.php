<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index')->with('clientes',$clientes);
        $clientes['clientes'] = Cliente::where('inhabilitado', false)->paginate(10);
        return view('clientes.index', $clientes);
        //
    }

    public function pdf(Request $request)
    {
        $criterio1 = $request->input('criterio1');
        $criterio2 = $request->input('criterio2');
    
        $clientes= Cliente::where('inhabilitado', false); // Filtrar solo las ventas habilitadas
    
        // Aplica los criterios de filtrado si se proporcionaron
        if ($criterio1) {
            $clientes->whereDate('fecha_de_nacimiento', $criterio1);
        }
        if ($criterio2) {
            $clientes->where('identificacion', $criterio2);
        }
    
        $clientes = $clientes->paginate(10);
    
        $pdf = PDF::loadView('cliente.pdf', ['clientes' => $clientes]);
        return $pdf->stream('PDFClientes-' . time() . '.pdf');
    }

   /* public function pdf(){
        $clientes=Cliente::all();
        $pdf = Pdf::loadView('cliente.pdf', compact('clientes'));
        return $pdf->stream();

    }*/

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clientes = new Cliente();

        $clientes->identificacion = $request->get('identificacion');
        $clientes->nombres = $request->get('nombres');
        $clientes->fecha_de_nacimiento = $request->get('fecha_de_nacimiento');
        $clientes->direccion = $request->get('direccion');
        $clientes->telefono = $request->get('telefono');
        $clientes->email = $request->get('email');
        $clientes->ciudad = $request->get('ciudad');
        $clientes->save();

        return redirect('clientes')->with('mensaje','Cliente agregado con exito!');

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
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = cliente::find($id);

        $cliente->identificacion = $request->get('identificacion');
        $cliente->nombres = $request->get('nombres');
        $cliente->fecha_de_nacimiento = $request->get('fecha_de_nacimiento');
        $cliente->direccion = $request->get('direccion');
        $cliente->telefono = $request->get('telefono');
        $cliente->email = $request->get('email');
        $cliente->ciudad = $request->get('ciudad');

        $cliente->save();
        return redirect('clientes')->with('mensaje','Cliente actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */


   /*  public function destroy($id)
    {
        $cliente = Cliente::find($id);        
        $cliente->delete();

        return redirect('clientes')->with('mensaje','Cliente inhabilitado con exito!');
    }*/
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->inhabilitado = true;
        $cliente->save();
        //return redirect()->route('clientes')->with('mensaje', 'Venta inhabilitada con éxito');
        return redirect('clientes')->with('Mensaje', 'Producto inhabilitado con éxito');
    }



}
