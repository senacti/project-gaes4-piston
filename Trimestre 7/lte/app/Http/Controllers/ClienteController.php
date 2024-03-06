<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        $vehiculos=Vehiculo::pluck('vehiculo_marca','id');
        $vehiculos1=Vehiculo::pluck('vehiculo_matricula','id');
        $vehiculos2=Vehiculo::pluck('vehiculo_modelo','id');
        $vehiculos3=Vehiculo::pluck('vehiculo_color','id');
        return view('cliente.create', compact('cliente','vehiculos','vehiculos1','vehiculos2','vehiculos3'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$rules);

        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        $vehiculos=Vehiculo::pluck('vehiculo_marca','id');
        $vehiculos1=Vehiculo::pluck('vehiculo_matricula','id');
        $vehiculos2=Vehiculo::pluck('vehiculo_modelo','id');
        $vehiculos3=Vehiculo::pluck('vehiculo_color','id');

        return view('cliente.edit', compact('cliente','vehiculos','vehiculos1','vehiculos2','vehiculos3'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        request()->validate(Cliente::$rules);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'El vehiculo se ha actualizado con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    }
}
