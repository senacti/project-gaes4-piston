<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view("index1");
});

Route::resource('productosservicios', ProductosController::class)->middleware('auth');

Route::patch('/productosservicios/{productosservicio}', [ProductosController::class, 'update'])->name('productosservicios.update')->middleware('auth');

Route::get('/home', [ProductosController::class, 'index'])->name('home')->middleware('auth');



Route::get('/productosservicios.pdf', [ProductosController::class, 'pdf'])->name('productosservicios.pdf');





Route::get('/dashboard', function () {
    return view("Dashboard");
});

Route::get('/clientes', function () {
    return view("index");
});

Route::get('/productosyservicios', function () {
    return view("Productos");
});

Route::get('/mecanicos', function () {
    return view("Mecanicos");
});

Route::get('/ventas', function () {
    return view("Ventas");
});

Route::get('/historialeinformes', function () {
    return view("Historial de ventas y Informes");
});

Route::get('/error404', function () {
    return view("Error");
});

Route::get('/error500', function () {
    return view("Error500");
});

Route::get('/register', function () {
    return view("register");
});

Route::get('/login', function () {
    return view("login");
});

Route::post('/guardar-venta', 'VentaController@guardar');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
