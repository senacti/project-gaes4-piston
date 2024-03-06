@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Ventas</h1>
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
                            <span class="card-title">{{ __('Mostrar') }} Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Empleado Id:</strong>
                            {{ $venta->Mecanico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Empleado Id:</strong>
                            {{ $venta->Mecanico->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $venta->Mecanico->especialidad}}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente Id:</strong>
                            {{ $venta->Cliente->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Cliente Id:</strong>
                            {{ $venta->Cliente->apellido_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Marca Id:</strong>
                            {{ $venta->Vehiculo->vehiculo_marca }}
                            </div>
                        <div class="form-group">
                            <strong>Vehiculo Modelo Id:</strong>
                            {{ $venta->Vehiculo->vehiculo_modelo }}
                            </div>
                        <div class="form-group">
                            <strong>Vehiculo Matricula Id:</strong>
                            {{ $venta->Vehiculo->Vehiculo_matricula }}
                            </div>
                        <div class="form-group">
                            <strong>Vehiculo Color Id:</strong>
                            {{ $venta->Vehiculo->Vehiculo_color  }}
                            </div>
                        <div class="form-group">
                            <strong>Nombre Servicio Id:</strong>
                            {{ $venta->Servicio->nombre_servicio }}
                            </div>
                        <div class="form-group">
                            <strong>Precio Servicio Id:</strong>
                            {{ $venta->Servicio->precio_servicio }}
                            </div>
                        <div class="form-group">
                            <strong>Nombre Producto Id:</strong>
                            {{ $venta->Producto->nombre_producto }}
                            </div>
                        <div class="form-group">
                            <strong>Cantidad Producto Id:</strong>
                            {{ $venta->Producto->cantidad_productos}}
                            </div>
                        <div class="form-group">
                            <strong>Precio Producto Id:</strong>
                            {{ $venta->Producto->precio_producto }}
                            </div>
                        <div class="form-group">
                            <strong>Total Comision Id:</strong>
                            {{ $venta->total_comision_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Venta:</strong>
                            {{ $venta->fecha_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Total Venta:</strong>
                            {{ $venta->total_venta }}
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




