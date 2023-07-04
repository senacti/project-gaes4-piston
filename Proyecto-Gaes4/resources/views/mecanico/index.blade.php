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
  <title>Mecanicos</title>
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
        <a href="#">
          <span class="material-icons-sharp">logout</span>
          <h3>Salir</h3>
        </a>
      </div>
    </aside>



    <main>
        <h1>TABLA MECANICOS</h1>
<br>
@if(Session::has('mensaje'))
<div class="alert alert-success">
  <strong>
{{ Session::get('mensaje')}}</strong> 
</div>
@endif 
<a href="mecanicos/create" class="btn btn-warning">REGISTRAR NUEVO MECANICO</a>
<a  href="{{route('mecanico.pdf')}}" class="btn btn-dark" >PDF</a>
<br>
<br>

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
                <form action="{{route('mecanicos.destroy',$mecanico->id)}}" method="POST">

        
            <a href="/mecanicos/{{$mecanico->id}}/edit" class="btn btn-warning">Editar</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger" onclick="return confirm ('Estas seguro de eliminar este mecanico?')">Borrar</button>
        </form>
            </td>
        </tr>
        



        @endForeach
        
      </tbody>
      
    </table>

    </main>