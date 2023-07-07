@extends('layouts.plantillabase')
@section('contenido')
<div class="container">

<form action="{{ route('venta.update',$venta->id)}}" method="post">
@csrf
@method('PUT')
@include('venta.form',['modo'=>'Editar'])



</form>
</div>
@endsection


