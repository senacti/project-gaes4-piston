<?php

namespace App\Http\Controllers;

use App\Models\Mecanico;
use Illuminate\Http\Request;

/**
 * Class MecanicoController
 * @package App\Http\Controllers
 */
class MecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mecanicos = Mecanico::paginate();

        return view('mecanico.index', compact('mecanicos'))
            ->with('i', (request()->input('page', 1) - 1) * $mecanicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mecanico = new Mecanico();
        return view('mecanico.create', compact('mecanico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mecanico::$rules);

        $mecanico = Mecanico::create($request->all());

        return redirect()->route('mecanicos.index')
            ->with('success', 'El empleado se ha registrado de manera exitosa.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mecanico = Mecanico::find($id);

        return view('mecanico.show', compact('mecanico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mecanico = Mecanico::find($id);

        return view('mecanico.edit', compact('mecanico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mecanico $mecanico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mecanico $mecanico)
    {
        request()->validate(Mecanico::$rules);

        $mecanico->update($request->all());

        return redirect()->route('mecanicos.index')
            ->with('success', 'El empleado se ha actualizado con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mecanico = Mecanico::find($id)->delete();

        return redirect()->route('mecanicos.index')
            ->with('success', 'Mecanico deleted successfully');
    }
}
