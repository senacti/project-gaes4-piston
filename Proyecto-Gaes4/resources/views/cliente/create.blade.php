@extends('layouts.plantillabase1')

@section('contenido')
@if(count($errors)>0)

    <div class="alert alert-danger" role="alert"> 
    
<ul>
        @foreach( $errors->all() as $error )
            <li> {{ $error }} </li>
    @endforeach

    </ul>

    </div>
    

    
@endif
<h2>CREAR REGISTROS</h2>

<form action="/clientes" method="POST">
  @csrf
<div class="mb-3">
  <label for="" class="form-label">Identificacion</label>
  <input id="identificacion" name="identificacion" type="number" required="" pattern="[0-9]+"  min="99999999" max="999999999999" class="form-control" tabindex="1"
  required oninvalid="this.setCustomValidity('Por favor ingresa un número identificacion válido.')" oninput="this.setCustomValidity('')">    
</div>
<div class="mb-3">
  <label for="" class="form-label">Nombres</label>
  <input id="nombres" name="nombres" type="text" required="" pattern="^[a-zA-Z' ']+$" minlength="1" maxlength="50" class="form-control" tabindex="2"
  required oninvalid="this.setCustomValidity('Por favor ingresa un nombre válido.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha de nacimiento</label>
  <input id="fecha_de_nacimiento" name="fecha_de_nacimiento" type="date" required=""  min="1923-01-01" class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingrese una fecha de nacimiento válida.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Direccion</label>
  <input id="direccion" name="direccion" type="text" required="" minlength="1" maxlength="50"  class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingrese una dirección válida.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="" class="form-label">Telefono</label>
  <input id="telefono" name="telefono" type="number" required="" pattern="[0-9]+" min="9999999" max="9999999999" class="form-control" tabindex="3"
  required oninvalid="this.setCustomValidity('Por favor ingresa un numero de telefono valido.')" oninput="this.setCustomValidity('')">
</div>
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input id="email" name="email" type="email" class="form-control"  required=""  minlength="1" maxlength="50" tabindex="3" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}"
  required oninvalid="this.setCustomValidity('Por favor ingresa tu email.')" oninput="this.setCustomValidity('')">
</div>
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
