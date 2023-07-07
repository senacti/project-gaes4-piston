@extends('layouts.plantillabase1')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
  @csrf
  @method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Identificacion</label>
  <input id="identificacion" name="identificacion" type="number" value="{{$cliente->identificacion}}" required="" pattern="[0-9]+" min="0" max="999999999999" class="form-control" tabindex="1"
  required oninvalid="this.setCustomValidity('Por favor ingresa un número identificacion válido.')" oninput="this.setCustomValidity('')">    
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombres</label>
  <input id="nombres" name="nombres" type="text" value="{{$cliente->nombres}}" required="" minlength="1" maxlength="50" class="form-control" tabindex="2"
  required oninvalid="this.setCustomValidity('Por favor ingresa un nombre válido.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha de nacimiento</label>
  <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="date" min="1923-01-01" value="{{$cliente->fecha_de_nacimiento}}" required="" class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingrese una fecha de nacimiento vaáida.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input id="direccion" name="direccion" type="text" value="{{$cliente->direccion}}" required="" minlength="1" maxlength="50" class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingrese una dirección válida.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" value="{{$cliente->telefono}}" required="" pattern="[0-9]+" min="0" max="999999999999" class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingresa un numero de telefono v{alido.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input id="email" name="email" type="email" value="{{$cliente->email}}"  minlength="1" maxlength="50" class="form-control" required="" tabindex="3" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"
  required oninvalid="this.setCustomValidity('Por favor ingresa tu email.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <select id="ciudad" name="ciudad" type="text" class="form-control" required="" minlength="1" maxlength="50" tabindex="3"
    required oninvalid="this.setCustomValidity('Por favor ingresa tu ciudad de origen.')" oninput="this.setCustomValidity('')">
    <option value="">Selecciona una ciudad</option>
    <option value="Arauca">Arauca</option>
    <option value="Armenia">Armenia</option>
    <option value="Barranquilla">Barranquilla</option>
    <option value="Bogotá">Bogotá</option>
    <option value="Bucaramanga">Bucaramanga</option>
    <option value="Buenaventura">Buenaventura</option>
    <option value="Cali">Cali</option>
    <option value="Cartagena">Cartagena</option>
    <option value="Cúcuta">Cúcuta</option>
    <option value="Florencia">Florencia</option>
    <option value="Ibagué">Ibagué</option>
    <option value="Inírida">Inírida</option>
    <option value="Leticia">Leticia</option>
    <option value="Manizales">Manizales</option>
    <option value="Medellín">Medellín</option>
    <option value="Mitú">Mitú</option>
    <option value="Mocoa">Mocoa</option>
    <option value="Montería">Montería</option>
    <option value="Neiva">Neiva</option>
    <option value="Pasto">Pasto</option>
    <option value="Pereira">Pereira</option>
    <option value="Popayán">Popayán</option>
    <option value="Puerto Carreño">Puerto Carreño</option>
    <option value="Puerto Inírida">Puerto Inírida</option>
    <option value="Puerto Leguízamo">Puerto Leguízamo</option>
    <option value="Quibdó">Quibdó</option>
    <option value="Riohacha">Riohacha</option>
    <option value="San Andrés">San Andrés</option>
    <option value="San José del Guaviare">San José del Guaviare</option>
    <option value="Santa Marta">Santa Marta</option>
    <option value="Sincelejo">Sincelejo</option>
    <option value="Tunja">Tunja</option>
    <option value="Valledupar">Valledupar</option>
    <option value="Villavicencio">Villavicencio</option>
    <option value="Yopal">Yopal</option>
  </select>
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
