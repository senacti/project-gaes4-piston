@extends('layouts.plantillabase3')
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
<h1>TABLA VENTAS</h1>
<br>
@if(Session::has('mensaje'))
<div class="alert alert-success">
  <strong>
{{ Session::get('mensaje')}}</strong> 
</div>
@endif 

<div class="row">
  <div class="col-md-20">
    <a href="{{ url('venta/create') }}">
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#create">
        REGISTRAR NUEVA VENTA
      </button>
    </a>
    <form action="{{ route('venta.pdf') }}" method="GET" style="display: inline-block;" target="_blank">
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
        <label for="criterio1">FECHA DE PEDIDO</label>
        <input type="date" class="form-control" name="criterio1" id="criterio1">
      </div>
      <br>
      <div class="form-group col-md-3">
        <label for="criterio2">NOMBRE DEL MECANICO</label>
        <input type="text" class="form-control" name="criterio2" id="criterio2">
      </div>
    </form>
  </div>
</div>
<script>
  // Copiar los valores de los campos de entrada a los campos ocultos al enviar el formulario
  document.querySelector('[action="{{ route('venta.pdf') }}"]').addEventListener('submit', function(event) {
    document.querySelector('#hiddenCriterio1').value = document.querySelector('#criterio1').value;
    document.querySelector('#hiddenCriterio2').value = document.querySelector('#criterio2').value;
  });
</script>
    &nbsp;
<br>
    <table id="example" class="table table-striped" style="width: 100%">
        <thead class="thead-light">
            <tr>
                <th>ID VENTA</th>
                <th>MECANICO</th>
                <th>PORCENTAJE</th>
                <th>MARCA VEHICULO</th>
                <th>MODELO</th>
                <th>MATRICULA</th>
                <th>VIN</th>
                <th>FECHA PEDIDO</th>
                <th>SERVICIO</th>
                <th>PRODUCTO</th>
                <th>TOTAL</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody id="tabla-body">
            
                @foreach ( $ventas as $venta )
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->Mecanico }}</td>
                <td>{{ $venta->Porcentaje }}</td>
                <td>{{ $venta->MarcaDelVehiculo }}</td>
                <td>{{ $venta->ModeloVehiculo }}</td>
                <td>{{ $venta->Matricula }}</td>
                <td>{{ $venta->Vin }}</td>
                <td>{{ $venta->FechaDeSolicitud }}</td>
                <td>{{ $venta->Servicio }}</td>
                <td>{{ $venta->Producto }}</td>
                <td>{{ $venta->Total }}</td>
                <td>

                        <a href="{{ route('venta.edit', $venta->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('venta.destroy', $venta->id) }}" class="d-inline" method="post" onsubmit="return confirm ('Estas seguro de inhabilitar esta venta?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"> Borrar</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{!! $ventas->links() !!}
    </main>
    @endsection