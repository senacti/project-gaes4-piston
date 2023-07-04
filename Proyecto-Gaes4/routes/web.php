<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('index1');
});

Route::get('/error500', function () {
    return view('Error500');
});




//rutas de venta 
Auth::routes();
Route::resource('venta', VentaController::class)->middleware('auth');
Route::get('/venta.pdf', [App\Http\Controllers\VentaController::class, 'pdf'])->name('venta.pdf'); 
Route::get('/home', [VentaController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function (){
Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
});

//rutas de productos y servicios 
Route::resource('productosservicios', ProductosController::class)->middleware('auth');
Route::get('/productosservicios.pdf2', [App\Http\Controllers\ProductosController::class, 'pdf'])->name('productosservicios.pdf2');
Route::patch('/productosservicios/{productosservicio}', [ProductosController::class, 'update'])->name('productosservicios.update')->middleware('auth');
Route::get('/home', [ProductosController::class, 'index'])->name('home')->middleware('auth');

//rutas clientes 
Route::get('/cliente/pdf', [App\Http\Controllers\ClienteController::class, 'pdf'])->name('cliente.pdf');
Route::resource('clientes','App\Http\Controllers\ClienteController');
Route::resource('clientes', ClienteController::class)->middleware('auth');

//rutas de mecanicos
Route::get('mecanicos/pdf',[App\Http\Controllers\MecanicoController::class,'pdf'])->name('mecanico.pdf');
Route::resource('mecanicos','App\Http\Controllers\MecanicoController');
Route::middleware([
    'auth:sanctum', 
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});