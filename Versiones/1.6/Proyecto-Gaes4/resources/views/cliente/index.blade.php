@extends('layouts.plantillabase1')
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
        <a href="{{ url('/error500') }}">
          <span class="material-symbols-rounded">add </span>
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
            <h1>TABLA CLIENTES</h1>
            <br>
            @if(Session::has('mensaje'))
<div class="alert alert-success">
<strong>
{{ Session::get('mensaje')}}</strong> 
</div>
@endif 

            






            <div class="row">
              <div class="col-md-20">
                <a href="{{ url('clientes/create') }}" >
                  <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#create">
                    REGISTRAR NUEVO CLIENTE
                  </button>
                </a>
                <form action="{{ route('cliente.pdf') }}" method="GET" target="_blank"  style="display: inline-block;">
                  <input type="hidden" name="criterio1" id="hiddenCriterio1">
                  <input type="hidden" name="criterio2" id="hiddenCriterio2">
                  <button type="submit" class="btn btn-dark"  data-toggle="modal" data-target="#create">PDF</button>
                </form>
              </div>
              <br>
              <br>
              <div class="col-md-9">
                <form>
                  <div class="form-group col-md-3">
                    <label for="criterio1">Fecha de nacimiento</label>
                    <input type="date" class="form-control" name="criterio1" id="criterio1">
                  </div>
                  <br>
                  <div class="form-group col-md-3">
                    <label for="criterio2">Identificacion</label>
                    <input type="number" class="form-control" name="criterio2" id="criterio2">
                  </div>
                </form>
              </div>
            </div>
            <script>
              // Copiar los valores de los campos de entrada a los campos ocultos al enviar el formulario
              document.querySelector('[action="{{ route('cliente.pdf') }}"]').addEventListener('submit', function(event) {
                document.querySelector('#hiddenCriterio1').value = document.querySelector('#criterio1').value;
                document.querySelector('#hiddenCriterio2').value = document.querySelector('#criterio2').value;
              });
            </script>
                &nbsp;




                <table id="example" class="table table-striped" style="width: 100%">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID CLIENTE</th>
                        <th scope="col">IDENTIFICACION </th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CIUDAD</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                    @if(!$cliente->inhabilitado)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->identificacion }}</td>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->fecha_de_nacimiento }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->ciudad }}</td>
                        <td>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" class="d-inline" method="POST"
                              onsubmit="return confirm('¿Estas seguro de inhabilitar este cliente?')">
                                <a href="/clientes/{{ $cliente->id }}/edit" class="btn btn-warning">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return res()">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        
     
       
    </main>
    @endsection