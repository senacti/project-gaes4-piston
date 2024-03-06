@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Producto</h1>
@stop

@section('content')
@section('template_title')
    {{ __('Update') }} Vehiculo
@endsection


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Productos:</strong>
                            {{ $producto->cantidad_productos }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto:</strong>
                            {{ $producto->precio_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop





