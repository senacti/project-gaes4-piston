@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Vehiculo</h1>
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
                        <span class="card-title">{{ __('Mostrar') }} Vehiculo</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> {{ __('Atras') }}</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Vehiculo Marca:</strong>
                        {{ $vehiculo->vehiculo_marca }}
                    </div>
                    <div class="form-group">
                        <strong>Vehiculo Modelo:</strong>
                        {{ $vehiculo->vehiculo_modelo }}
                    </div>
                    <div class="form-group">
                        <strong>Vehiculo Matricula:</strong>
                        {{ $vehiculo->Vehiculo_matricula }}
                    </div>
                    <div class="form-group">
                        <strong>Vehiculo Color:</strong>
                        {{ $vehiculo->Vehiculo_color }}
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






