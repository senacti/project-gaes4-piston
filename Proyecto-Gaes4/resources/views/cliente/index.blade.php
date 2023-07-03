@extends('layouts.plantillabase')

@section('contenido')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,200,1,200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,1,200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,500,1,200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Clientes</title>
    <link rel="stylesheet" href="{{ asset('css/css1.css') }}">

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
                <a href="{{ url('/dashboard') }}" class="active">

                    <span class="material-symbols-rounded">dashboard</span>
                    <h3>Dashboard</h3>

                </a>

                <a href="{{ url('/clientes') }}">
                    <span class="material-icons-sharp">people</span>
                    <h3>Clientes</h3>

                </a>
                <a href="{{ url('/productosyservicios') }}">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Productos y Servicios</h3>
                    <span class="message-count">0</span>
                    <!-------- El contador de los productos ---------->
                </a>
                <a href="{{ url('/mecanicos') }}">
                    <span class="material-symbols-rounded">plumbing</span>
                    <h3>Mecanicos</h3>

                </a>
                <a href="{{ url('/ventas') }}">
                    <span class="material-symbols-outlined">add_task</span>
                    <h3>Ventas</h3>

                </a>
                <a href="{{ url('/historialeinformes') }}">
                    <span class="material-symbols-rounded">history </span>
                    <h3>Historial de ventas e informes</h3>
                </a>
                <a href="{{ url('/error500') }}">
                    <span class="material-symbols-rounded">add </span>
                    <h3>Añadir Modulos</h3>
                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Salir</h3>
                    </a>
                    <!--------Fin  Los iconos ---------->
            </div>
        </aside>
        <main>
<a href="clientes/create" class="btn btn-primary">CREAR</a>
<a href="{{ route('cliente.pdf') }}" class="btn btn-success" target="_blank">PDF</a>


<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Identificacion</th>
            <th scope="col">Nombres</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($clientes as $cliente)
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
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                <a href="/clientes/{{ $cliente->id }}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"onclick="return res()">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
                    </tbody>
                </table>
            @endsection
        </main>
            <script>
                var res = function() {
                    var not = confirm("¿Estas seguro de eliminar a este usuario?");
                    return not;
                }
            </script>
</body>

</html>
