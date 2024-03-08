<?php

use App\Http\Controllers\ClaimController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Mail\HelloMail;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/inicio', function () {
    return view('index1');  
});

//Claims
Route::post('/submit-claim', [ClaimController::class, 'submit'])->name('submitClaim');
Route::get('/claims', [ClaimController::class, 'index'])->name('claims.index');



//Enviar Correo de PQR
Route::get('/send_mail/{id}', [ClaimController::class, 'send_mail']);
Route::post('/mail/{id}', [ClaimController::class, 'mail'])->name('mail');  

//Estado PQR
Route::post('/update-status/{claim}', [ClaimController::class, 'updateStatus'])->name('claim.updateStatus');
Route::post('/update-status/{claim}', [ClaimController::class, 'updateStatus'])->name('claim.updateStatus');

//Contactanos
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

//Mostrar mensajes de la base de datos
Route::get('messages', [MessageController::class, 'index'])->name('messages.index');

Auth::routes();

use App\Http\Middleware\CheckRole;

Route::group(['middleware' => ['auth']], function () {
    // Rutas accesibles para todos los usuarios autenticados
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/acceso-denegado', function () { return view('acceso-denegado'); })->name('acceso-denegado');

    // Rutas accesibles para el rol 2 (Mecánico) y el administrador
    Route::group(['middleware' => [CheckRole::class . ':Mecanico|Admin']], function () {
        Route::resource('tareas', App\Http\Controllers\TareaController::class);
        // Agrega otras rutas aquí que ambos roles deberían tener acceso
    });

    // Rutas accesibles solo para el administrador
    Route::group(['middleware' => [CheckRole::class . ':Admin']], function () {
        Route::resource('mecanicos', App\Http\Controllers\MecanicoController::class);
        Route::resource('productos', App\Http\Controllers\ProductoController::class);
        Route::resource('servicios', App\Http\Controllers\ServicioController::class);
        Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class);
        Route::resource('clientes', App\Http\Controllers\ClienteController::class);
        Route::resource('ventas', App\Http\Controllers\VentaController::class);
        Route::resource('/usuarios',App\Http\Controllers\Admin\UserController::class)->names('admin.users');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::resource('/usuarios',App\Http\Controllers\Admin\UserController::class)->only('index', 'edit', 'update')->names('admin.users');   
        Route::get('mecanicos/pdf',[App\Http\Controllers\MecanicoController::class,'pdf'])->name('mecanico.pdf');
        // Agrega otras rutas aquí que solo el administrador debería tener acceso
    });
});

