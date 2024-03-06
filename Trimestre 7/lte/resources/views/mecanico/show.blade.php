@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Empleado</h1>
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
                            <span class="card-title">{{ __('Mostrar') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('mecanicos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $mecanico->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mecanico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $mecanico->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $mecanico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $mecanico->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $mecanico->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $mecanico->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $mecanico->especialidad }}
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




