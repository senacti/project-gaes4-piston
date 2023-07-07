@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR MECANICOS</h2>

<form action="/mecanicos/{{$mecanico->id}}" method="POST">
    @csrf    
    @method('PUT')
  
    <div class="mb-3">
    <label for="" class="form-label">Cedula</label>
    <input id="cedula" name="cedula" type="number" class="form-control" value="{{$mecanico->cedula}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$mecanico->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$mecanico->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$mecanico->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$mecanico->telefono}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$mecanico->email}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control" value="{{$mecanico->ciudad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Especialidad</label>
    <input id="especialidad" name="especialidad" type="text" class="form-control" value="{{$mecanico->especialidad}}">
  </div>




  <a href="/mecanicos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>



@endsection