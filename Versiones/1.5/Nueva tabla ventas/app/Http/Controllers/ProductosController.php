<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosProductosservicios['productosservicios'] = Productos::paginate();
        return view('productosservicios.index', $datosProductosservicios);
    }

    public function pdf()
    {
        $productosservicio = Productos::paginate();
        $pdf = PDF::loadView('productosservicios.pdf2',['productosservicios'=>$productosservicio]);
        return $pdf->stream('PDFProductos-'.time().'.pdf');
    }





    public function create()
    {
        return view('productosservicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campos = [
            'NOMBRE_PRODUCTO' => 'required|string|max:50',
            'CANTIDAD_PRODUCTO' => 'required|string|max:100',
            'DESCRIPCION' => 'required|string|max:100',
            'ID_CATEGORIA_DE_PRODUCTOS' => 'required|string|max:100',
        ];

        $mensaje = ['required' => 'El :attribute es requerido'];

        $this->validate($request, $campos, $mensaje);

        $datosProductosservicios = $request->except('_token');

        Productos::create($datosProductosservicios);

        return redirect('productosservicios')->with('Mensaje', 'Producto agregado con éxito');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productos = Productos::findOrFail($id);
        return view('productosservicios.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */










    public function update(Request $request, $id)
    {


        $campos = [
            'NOMBRE_PRODUCTO' => 'required|string|max:50',
            'CANTIDAD_PRODUCTO' => 'required|string|max:100',
            'DESCRIPCION' => 'required|string|max:100',
            'ID_CATEGORIA_DE_PRODUCTOS' => 'required|string|max:10',

        ];

        $mensaje = ['required' => 'La :attribute es requerido',        
        'CANTIDAD_PRODUCTO'. 'required' => 'La cantidad es requerida', 
        'DESCRIPCION'. 'required' => 'La descripcion es requerida',
        'ID_CATEGORIA_DE_PRODUCTOS'. 'required' => 'La categoria es requerida'

    ];


        $this->validate($request, $campos, $mensaje);


        $datosProductosservicios = $request->except(['_token', '_method']);
        Productos::where('id', '=', $id)->update($datosProductosservicios);
        return redirect('productosservicios')->with('Mensaje', 'Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Productosservicio = Productos::findOrFail($id);
        $Productosservicio->delete();
        return redirect('productosservicios')->with('Mensaje', 'Producto inhabilitado con éxito');
    }
}
