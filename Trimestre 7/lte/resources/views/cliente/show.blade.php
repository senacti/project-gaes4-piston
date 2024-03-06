@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar Cliente</h1>
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
                            <span class="card-title">{{ __('Mostrar') }} Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Cedula Cliente:</strong>
                            {{ $cliente->cedula_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cliente:</strong>
                            {{ $cliente->nombre_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Cliente:</strong>
                            {{ $cliente->apellido_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $cliente->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Marca Id:</strong>
                            {{ $cliente->Vehiculo->vehiculo_marca }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Modelo Id:</strong>
                            {{ $cliente->Vehiculo->vehiculo_modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Matricula Id:</strong>
                            {{ $cliente->Vehiculo->Vehiculo_matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Color Id:</strong>
                            {{  $cliente->Vehiculo->Vehiculo_color }}
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






