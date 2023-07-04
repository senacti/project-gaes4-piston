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

        //
    }


    public function pdf(){
        $clientes=Cliente::all();
        $pdf = Pdf::loadView('cliente.pdf', compact('clientes'));
        return $pdf->stream();

    }

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
        return redirect('clientes')->with('mensaje','Cliente actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Cliente::find($id);        
        $articulo->delete();

        return redirect('clientes')->with('mensaje','Cliente eliminado con exito!');
    }
}
