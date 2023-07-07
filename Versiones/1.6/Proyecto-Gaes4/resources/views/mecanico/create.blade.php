@extends('layouts.plantillabase')

@section('contenido')
<h2>Añadir Mecanicos</h2>
     
<form action="/mecanicos" method="POST">
   @csrf
  <div class="mb-3">
    <label for="" class="form-label">Cedula</label>
    <input id="cedula" name="cedula" type="number" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control" tabindex="7">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Especialidad</label>
    <input id="especialidad" name="especialidad" type="text" class="form-control" tabindex="8">
  </div>
  
  <a href="/mecanicos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection