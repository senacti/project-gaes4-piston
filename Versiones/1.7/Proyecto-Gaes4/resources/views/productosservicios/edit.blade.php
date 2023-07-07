
@extends('layouts.plantillabase')
@section('contenido')
<div class="container">

<form action="{{url('/productosservicios/'.$productos->id)}}" method="post">
    
    @csrf

    {{method_field('PATCH')}}

    @include('productosservicios.form', ['modo'=>'Editar '])
</form>
</div>
@endsection





