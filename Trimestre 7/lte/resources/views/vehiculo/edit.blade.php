@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro de vehiculos</h1>
@stop

@section('content')
@section('template_title')
    {{ __('Editar Registro') }} Vehiculo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar Registro') }} Vehiculo:</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehiculos.update', $vehiculo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vehiculo.form')

                        </form>
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



























