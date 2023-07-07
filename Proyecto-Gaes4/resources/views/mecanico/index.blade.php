@extends('layouts.plantillabase2')

@section('contenido')
    

        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,200,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,1,200" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Ventas</title>
  <link rel="stylesheet" href="{{asset('css/Ventas.css') }}">
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="{{ asset('Imagenes/Please.png') }}" alt="">
          <h2><span class="danger">PIS</span>TON</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>
      <div class="sidebar">
        <a class="active">
          <span class="material-symbols-rounded">dashboard</span>
          <h3>Dashboard</h3>

        <a href="{{ url('/clientes') }}">
          <span class="material-icons-sharp">people</span>
          <h3>Clientes</h3>
        </a>
        <a href="{{ url('/productosservicios') }}">
          <span class="material-icons-sharp">inventory</span>
          <h3>Productos</h3>

        </a>
        <a href="{{ url('/mecanicos') }}">
          <span class="material-symbols-rounded">plumbing</span>
          <h3>Mecanicos</h3>
        </a>
        <a href="{{ url('/ventas') }}">
          <span class="material-symbols-outlined">add_task</span>
          <h3>Ventas</h3>
        </a>
        <a href="{{ url('/Errores') }}">          <span class="material-symbols-rounded">add </span>
          <h3>Añadir Módulos</h3>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" {{ __('Logout') }}>
          <span class="material-icons-sharp">logout</span>
          <h3>Salir</h3>
        </a>




        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>
      </div>
    </aside>
    <main>
        <h1>TABLA MECANICOS</h1>
        <div class="row">
            <div class="col-md-9">
              <a href="{{url('/mecanicos/create')}}">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#create">
                 INGRESAR NUEVO MECANICO
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

<a href="{{ route('mecanicos.edit', $mecanico->id) }}" class="btn btn-warning">Editar</a>

<form action="{{ route('mecanicos.destroy', $mecanico->id) }}" class="d-inline" method="post" onsubmit="return confirm ('Estas seguro de inhabilitar este dato?')">

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
      </main>

            @endsection

