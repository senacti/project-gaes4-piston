@extends('layouts.plantillabase')

@section('contenido')

        @if (Session::has('mensaje'))
        {{Session::get('mensaje')}}

        @endif

        <div class="row">
            <div class="col-md-9">
              <a href="{{url('/mecanico/create')}}">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
                 Añadir
                </button>
              </a>
              <form action="{{ route('mecanico.pdf') }}" method="GET" style="display: inline-block;">
                <input type="hidden" name="criterio1" id="hiddenCriterio1">
                <input type="hidden" name="criterio2" id="hiddenCriterio2">
                <button type="submit" class="btn btn-dark" data-toggle="modal" data-target="#create">PDF</button>
              </form>
            </div>
            <br>
            <br>
            <div class="col-md-9">
              <form>
                <div class="form-group col-md-3">
                  <label for="criterio1">Nombre del mecanico</label>
                  <input type="text" class="form-control"  name="criterio1" id="criterio1">
                </div>
                <br>
                <div class="form-group col-md-3">
                  <label for="criterio2">Especialidad del mecanico</label>
                  <input type="text" class="form-control" name="criterio2" id="criterio2">
                </div>
              </form>
            </div>
          </div>
          <script>
            // Copiar los valores de los campos de entrada a los campos ocultos al enviar el formulario
            document.querySelector('[action="{{ route('mecanico.pdf') }}"]').addEventListener('submit', function(event) {
              document.querySelector('#hiddenCriterio1').value = document.querySelector('#criterio1').value;
              document.querySelector('#hiddenCriterio2').value = document.querySelector('#criterio2').value;
            });
          </script>









            <table id="example" class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">CEDULA</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDO</th>
                      <th scope="col">DIRECCION</th>
                      <th scope="col">TELEFONO</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">CIUDAD</th>
                      <th scope="col">ESPECIALIDAD</th>
                      <th scope="col">OPERACIONES</th>
                    </tr>
                </thead>

                <tbody>
        @Foreach($mecanicos as $mecanico)

        <tr>
            <td>{{$mecanico->id}}</td>
            <td>{{$mecanico->cedula}}</td>
            <td>{{$mecanico->nombre}}</td>
            <td>{{$mecanico->apellido}}</td>
            <td>{{$mecanico->direccion}}</td>
            <td>{{$mecanico->telefono}}</td>
            <td>{{$mecanico->email}}</td>
            <td>{{$mecanico->ciudad}}</td>
            <td>{{$mecanico->especialidad}}</td>
            <td>

<a href="{{ route('mecanico.edit', $mecanico->id) }}" class="btn btn-warning">Editar</a>

<form action="{{ route('mecanico.destroy', $mecanico->id) }}" class="d-inline" method="post" onsubmit="return confirm ('Estas seguro de inhabilitar este dato?')">

    @csrf
    @method('DELETE')

            <button type="submit"  class="btn btn-danger">Borrar</button>
        </form>
    </td>
        </tr>




        @endForeach

                </tbody>
                {!! $mecanicos->links() !!}
            </table>
        </div>


            @endsection
