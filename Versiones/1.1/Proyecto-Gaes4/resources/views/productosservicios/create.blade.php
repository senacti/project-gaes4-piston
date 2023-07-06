
@extends('layouts.plantillabase')
@section('contenido')
<div class="container">

<form action="{{ url('productosservicios') }}" method="post">

    @csrf

    @include('productosservicios.form', ['modo'=>'Crear '])



</form>
</div>
@endsection