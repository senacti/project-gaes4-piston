@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Tarea</h1>
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
                            <span class="card-title">{{ __('Mostrar') }} Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarea.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Servicio Id:</strong>
                            {{ $tarea->Servicio->nombre_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Servicio Id:</strong>
                            {{ $tarea->Servicio->precio_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto Id:</strong>
                            {{ $tarea->Producto->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Producto Id:</strong>
                            {{ $tarea->Producto->cantidad_productos}}
                        </div>
                        <div class="form-group">
                            <strong>Precio Producto Id:</strong>
                            {{ $tarea->Producto->precio_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empleado Id:</strong>
                            {{ $tarea->Mecanico->nombre  }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Empleado Id:</strong>
                            {{ $tarea->Mecanico->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $tarea->Mecanico->especialidad}}}
                        </div>
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $tarea->estatus }}
                        </div>
                        <div class="form-group">
                            <strong>Disponibilidad:</strong>
                            {{ $tarea->disponibilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Comision:</strong>
                            {{ $tarea->Comision }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente Id:</strong>
                            {{ $tarea->Cliente->nombre_cliente}}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Cliente Id:</strong>
                            {{ $tarea->Cliente->apellido_cliente  }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Marca Id:</strong>
                            {{ $tarea->Vehiculo->vehiculo_marca  }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Modelo Id:</strong>
                            {{ $tarea->Vehiculo->vehiculo_modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Matricula Id:</strong>
                            {{ $tarea->Vehiculo->Vehiculo_matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Color Id:</strong>
                            {{ $tarea->Vehiculo->Vehiculo_color }}
                        </div>
                        <div class="form-group">
                            <strong>Total Reparacion:</strong>
                            {{ $tarea->total_reparacion }}
                        </div>
                        <div class="form-group">
                            <strong>Total Comision:</strong>
                            {{ $tarea->total_comision }}
                        </div>
                        <div class="form-group">
                            <strong>Comentarios:</strong>
                            {{ $tarea->comentarios }}
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






