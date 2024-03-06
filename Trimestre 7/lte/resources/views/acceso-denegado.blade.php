@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<br>
<br>
<br>
<br>

<br>
    <h1 class="text-center">NECESITAS CREDENCIALES PARA ACCEDER A ESTE APARTADO</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
              
                <!-- Aquí va el contenido de la página -->
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
            <img src="{{ asset('vendor/adminlte/dist/img/ACCESO DENEGADO.png') }}" alt="Imagen" class="img-fluid">
            </div>
        </div>
    </div>
@stop


