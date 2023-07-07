@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
@method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Identificacion</label>
    <input id="identificacion" name="identificacion" type="number" class="form-control" value="{{$cliente->identificacion}}"  tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input id="nombres" name="nombres" type="text" class="form-control" value="{{$cliente->nombres}}" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de nacimiento</label>
    <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="date" class="form-control" value="{{$cliente->fecha_de_nacimiento}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$cliente->direccion}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" value="{{$cliente->telefono}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$cliente->email}}" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <input id="ciudad" name="ciudad" type="text" class="form-control" value="{{$cliente->ciudad}}" tabindex="3">
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
