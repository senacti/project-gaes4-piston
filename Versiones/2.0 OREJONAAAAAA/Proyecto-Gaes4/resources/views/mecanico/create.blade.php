@extends('layouts.plantillabase2')

@section('contenido')
<h2>Añadir Mecanicos</h2>


<form action="{{url('/mecanicos')}}"  method="POST"  enctype="multipart/form-data">

@csrf
@include('mecanico.form',['modo'=>'Crear'])


</form>

@endsection