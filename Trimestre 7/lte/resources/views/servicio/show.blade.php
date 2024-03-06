@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Servicio</h1>
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
                            <span class="card-title">{{ __('Mostrar') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Servicio:</strong>
                            {{ $servicio->nombre_servicio }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Servicio:</strong>
                            {{ $servicio->precio_servicio }}
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



