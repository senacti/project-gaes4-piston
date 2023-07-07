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
        $datosProductosservicios['productosservicios'] = Productos::where('inhabilitado', false)->paginate(3);
        return view('productosservicios.index', $datosProductosservicios);
    }
    
    public function pdf(Request $request)
    {
        $criterio1 = $request->input('criterio1');
        $criterio2 = $request->input('criterio2');
    
        $productosservicios = Productos::where('inhabilitado', false);
    
        if ($criterio1) {
            $productosservicios->where('NOMBRE_PRODUCTO', $criterio1);
        }
    
        if ($criterio2) {
            $productosservicios->where('CATEGORIA_PRODUCTOS', $criterio2);
        }
    
        $productosservicios = $productosservicios->paginate(10);
    
        $pdf = PDF::loadView('productosservicios.pdf2', compact('productosservicios'));
        return $pdf->stream('PDFProductosservicios-' . time() . '.pdf2');
    }
    



    public function create()
    {
        return view('productosservicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $campos = [
        'NOMBRE_PRODUCTO' => 'required|string|max:50',
        'CANTIDAD_PRODUCTO' => 'required|string|max:100',
        'DESCRIPCION' => 'required|string|max:100',
        'CATEGORIA_PRODUCTOS' => 'required|string|max:100',
        'PRECIO_PRODUCTO' => 'required|numeric|',
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
            'CATEGORIA_PRODUCTOS' => 'nullable|string|max:100|regex:/^[A-Za-z0-9\s]+$/',
            'PRECIO_PRODUCTO' => 'required|numeric',
        ];
        
        $mensaje = [
            'required' => 'El campo :attribute es requerido',
            'CANTIDAD_PRODUCTO.required' => 'La cantidad es requerida',
            'DESCRIPCION.required' => 'La descripción es requerida',
            'CATEGORIA_PRODUCTOS.required' => 'La categoría es requerida',
            'PRECIO_PRODUCTO.required' => 'El precio es requerido',
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
        $Productosservicio->inhabilitado = true;
        $Productosservicio->save();
        return redirect('productosservicios')->with('Mensaje', 'Producto inhabilitado con éxito');
    }
}





