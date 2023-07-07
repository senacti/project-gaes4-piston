@extends('layouts.plantillabase')
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
  <title>Productos</title>
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
        </a>
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
        
      
<h1>TABLA PRODUCTOS</h1>
<br>

        @if(Session::has('Mensaje'))
        <div class="alert alert-success">
          <strong>
        {{ Session::get('Mensaje')}}</strong> 
        </div>
        @endif

    

        <br>

        <div class="row">
          <div class="col-md-9">
            <a href="{{url('/productosservicios/create')}}">
              <a href="{{ url('/productosservicios/create') }}" class="btn btn-warning">REGISTRAR NUEVO PRODUCTO</a>

            </a>
            <form action="{{ route('productosservicios.pdf2') }}" method="GET" style="display: inline-block;">
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
                <label for="criterio1">NOMBRE DEL PRODUCTO</label>
                <input type="text" class="form-control"  name="criterio1" id="criterio1">
              </div>
              <br>
              <div class="form-group col-md-3">
                <label for="criterio2">CATEGORIA</label>
                <input type="text" class="form-control" name="criterio2" id="criterio2">
              </div>
            </form>
          </div>
        </div>
        <script>
          // Copiar los valores de los campos de entrada a los campos ocultos al enviar el formulario
          document.querySelector('[action="{{ route('productosservicios.pdf2') }}"]').addEventListener('submit', function(event) {
            document.querySelector('#hiddenCriterio1').value = document.querySelector('#criterio1').value;
            document.querySelector('#hiddenCriterio2').value = document.querySelector('#criterio2').value;
          });
        </script>


        &nbsp;

       
        <br>
        <br>


        <table id="example" class="table table-striped" style="width: 100%">           
        <thead class="thead-light">
                <tr>
                    <th>#INGRESADO</th>
                    <th>NOMBRE DEL PRODUCTO</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO</th>
                    <th>DESCRIPCION</th>
                    <th>CATEGORIA DEL PRODUCTO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
              @foreach($productosservicios as $productosservicio)
              <tr>
                    <td>{{ $productosservicio->id }}</td>
                    <td>{{ $productosservicio->NOMBRE_PRODUCTO }}</td>
                    <td>{{ $productosservicio->CANTIDAD_PRODUCTO }}</td>
                    <td>{{ $productosservicio->PRECIO_PRODUCTO }}</td>
                    <td>{{ $productosservicio->DESCRIPCION }}</td>
                    <td>{{ $productosservicio->CATEGORIA_PRODUCTOS }}</td>
                    <td>
          
                      <a href="{{ url('productosservicios/'.$productosservicio->id.'/edit') }}" class="btn btn-warning">Editar</a>
                      <form action="{{ route('productosservicios.destroy', $productosservicio->id) }}" class="d-inline" method="post" onsubmit="return confirm('¿Estás seguro de inhabilitar este producto?')">
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Borrar</button>
                          </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $productosservicios->links() !!}
    </div>
</main>

@endsection


