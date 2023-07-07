@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<div class="mb-3">
    <label for="" class="form-label">Cedula</label>
    <input id="cedula" name="cedula" type="number" class="form-control" required pattern="[0-9]+"
    oninvalid="this.setCustomValidity('Por favor verifica que el formato contenga solo números y sin espacios ')"
    oninput="this.setCustomValidity('')"
    value="{{isset($mecanico->cedula)?$mecanico->cedula:old('cedula')}}">
  </div>





  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')"
    oninput="this.setCustomValidity('')" id="nombre" aria-describedby="helpId" placeholder=""
    value="{{isset($mecanico->nombre)?$mecanico->nombre:old('nombre')}}">
    <script>
        const input = document.querySelector('#nombre');
        input.addEventListener('input', () => {
            if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
            } else {
                input.setCustomValidity('');
            }
        });
    </script>
  </div>



  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')"
    oninput="this.setCustomValidity('')" id="apellido" aria-describedby="helpId" placeholder=""
    value="{{isset($mecanico->apellido)?$mecanico->apellido:old('apellido')}}">
    <script>
        const input = document.querySelector('#apellido');
        input.addEventListener('input', () => {
            if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
            } else {
                input.setCustomValidity('');
            }
        });
    </script>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" required oninvalid="this.setCustomValidity('Por favor ingresa un valor relacionado al tema dado.')"
    oninput="this.setCustomValidity('')" id="direccion" aria-describedby="helpId" placeholder=""
    value="{{isset($mecanico->direccion)?$mecanico->direccion:old('direccion')}}">
    <script>
        const input = document.querySelector('#direccion');
        input.addEventListener('input', () => {
            if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
            } else {
                input.setCustomValidity('');
            }
        });
    </script>

  </div>

  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="number" class="form-control" required pattern="[0-9]+"
    oninvalid="this.setCustomValidity('Por favor verifica que el formato contenga solo números y sin espacios ')"
    oninput="this.setCustomValidity('')"
    value="{{isset($mecanico->telefono)?$mecanico->telefono:old('telefono')}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input id="email" name="email" type="email" class="form-control" value="{{isset($mecanico->email)?$mecanico->email:old('email')}}">
  </div>




  <div class="mb-3">
    <label for="" class="form-label">Ciudad</label>
    <select id="ciudad" name="ciudad" type="text" class="form-control" value="{{isset($mecanico->ciudad)?$mecanico->ciudad:old('ciudad')}}">
        <option value="">Seleccione una capital</option>
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

  <div class="mb-3">
    <label for="" class="form-label">Especialidad</label>
    <input id="especialidad" name="especialidad" type="text" class="form-control" required oninvalid="this.setCustomValidity('Por favor ingresa un valor valido, recuerda que no puede tener numeros o caracteres especiales.')"
    oninput="this.setCustomValidity('')" id="especialidad" aria-describedby="helpId" placeholder=""
    value="{{isset($mecanico->especialidad)?$mecanico->especialidad:old('especialidad')}}">
    <script>
        const input = document.querySelector('#especialidad');
        input.addEventListener('input', () => {
            if (!/^[a-zA-Z' ']+$/.test(input.value)) {
                input.setCustomValidity('No ingreses caracteres especiales como (!/^$/@#) por favor, ingresa solo letras y espacios.');
            } else {
                input.setCustomValidity('');
            }
        });
    </script>

  </div>




  <a href="/mecanicos" class="btn btn-secondary">Cancelar</a>
  <input  type="submit" class="btn btn-primary" value="{{$modo}} Mecanico">