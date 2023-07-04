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
  <title>Reportes</title>
  <link rel="stylesheet" href="{{asset('css/Ventas.css') }}">
  <link rel="stylesheet" href="{{asset('css/ventas2.css') }}">
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
          <h3>Añadir Módulos</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">logout</span>
          <h3>Salir</h3>
        </a>
      </div>
    </aside>
    <main>
        <!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <title>Taller Mecánico - Ventas</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        </head>
        <body>
          <h1>Crear una venta</h1>
        
          <div class="recent-order">
            <div class="container">
              <div class="form-group clearfix">
                <div class="row">
                  <div class="col-md-10 offset-md-7 mt-1">
                    <button class="btn btn-danger pull-right" data-action="deletelastrow1">Borrar la última fila (Tabla 1)</button>
                    <button class="btn btn-danger pull-right" data-action="deletefirstrow1">Borrar la primera fila (Tabla 1)</button>
                  </div>
                </div>
              </div>
             
              <div class="form-group clearfix">
                <div class="row">
                  <div class="col-md-7">
                    <div class="row addvalueBox">
                      <div class="col-md-4 mt-1">
                        <select class="form-control" id="nombre-producto-select">
                          <option value="">Seleccionar Nombre del Producto</option>
                          <option value="Producto 1">Producto 1</option>
                          <option value="Producto 2">Producto 2</option>
                          <option value="Producto 3">Producto 3</option>
                        </select>
                      </div>
                      <div class="col-md-4 mt-1">
                        <input type="text" placeholder="ID Producto" class="form-control" id="id-producto-input"/>
                      </div> 
                      <div class="col-md-4 mt-1">
                        <input type="number" placeholder="Cantidad del Producto" class="form-control" id="cantidad-producto-input" />
                      </div>
                      <div class="col-md-4 mt-1">
                        <input type="text" placeholder="Descripción" class="form-control" id="descripcion-input" />
                      </div> 
                      <div class="col-md-4 mt-1">
                        <input type="number" placeholder="ID Categoría de Productos" class="form-control" id="id-categoria-input" />
                      </div>
                      <div class="col-md-4 mt-1">
                        <input type="number" placeholder="ID Ventas" class="form-control" id="id-ventas-input" />
                      </div>
                      <div class="col-md-4 mt-1">
                        <button class="btn btn-success pull-right" data-action="addrow1">Añadir (Tabla 1)</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 mt-2">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID Producto</th>
                          <th>Nombre del producto</th>
                          <th>Cantidad del producto</th>
                          <th>Descripción</th>
                          <th>ID Categoría</th>
                          <th>ID Ventas</th>
                        </tr>
                      </thead>
                      <tbody id="tabla-body1">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="recent.

          

          <div class="recent-order">
            <div class="container">
              <div class="form-group clearfix">
                <div class="row">
                  <div class="col-md-10 offset-md-7 mt-1">
                    <button class="btn btn-danger pull-right" data-action="deletelastrow2">Borrar la última fila (Tabla 2)</button>
                    <button class="btn btn-danger pull-right" data-action="deletefirstrow2">Borrar la primera fila (Tabla 2)</button>
                  </div>
                </div>
              </div>
             
              <div class="form-group clearfix">
                <div class="row">
                  <div class="col-md-7">
                    <div class="row addvalueBox">
                      <div class="col-md-4 mt-1">
                        <input type="text" placeholder="Nombre del cliente" class="form-control" id="nombre-cliente-input"/>
                      </div>
                      <div class="col-md-4 mt-1">
                        <input type="text" placeholder="Dirección del cliente" class="form-control" id="direccion-cliente-input" />
                      </div> 
                      <div class="col-md-4 mt-1">
                        <input type="number" placeholder="Teléfono del cliente" class="form-control" id="telefono-cliente-input" />
                      </div>
                      <div class="col-md-4 mt-1">
                        <input type="text" placeholder="Correo electrónico del cliente" class="form-control" id="email-cliente-input" />
                      </div> 
                      <div class="col-md-4 mt-1">
                        <input type="number" placeholder="ID Ventas" class="form-control" id="id-ventas2-input" />
                      </div>
                      <div class="col-md-4 mt-1">
                        <button class="btn btn-success pull-right" data-action="addrow2">Añadir (Tabla 2)</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-10 mt-2">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID Ventas</th>
                          <th>Nombre del cliente</th>
                          <th>Dirección del cliente</th>
                          <th>Teléfono del cliente</th>
                          <th>Correo electrónico del cliente</th>
                        </tr>
                      </thead>
                      <tbody id="tabla-body2">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
            $(document).ready(function() {
              var rowCount1 = 0;
              var rowCount2 = 0;
        
              $('[data-action="addrow1"]').click(function() {
                rowCount1++;
                var idProducto = $('#id-producto-input').val();
                var nombreProducto = $('#nombre-producto-select').val();
                var cantidadProducto = $('#cantidad-producto-input').val();
                var descripcion = $('#descripcion-input').val();
                var idCategoria = $('#id-categoria-input').val();
                var idVentas = $('#id-ventas-input').val();
        
                var newRow = '<tr><td>' + idProducto + '</td><td>' + nombreProducto + '</td><td>' + cantidadProducto + '</td><td>' + descripcion + '</td><td>' + idCategoria + '</td><td>' + idVentas + '</td></tr>';
        
                $('#tabla-body1').append(newRow);
              });
        
              $('[data-action="deletelastrow1"]').click(function() {
                if (rowCount1 > 0) {
                  $('#tabla-body1 tr:last-child').remove();
                  rowCount1--;
                }
              });
        
              $('[data-action="deletefirstrow1"]').click(function() {
                if (rowCount1 > 0) {
                  $('#tabla-body1 tr:first-child').remove();
                  rowCount1--;
                }
              });
        
              $('[data-action="addrow2"]').click(function() {
                rowCount2++;
                var nombreCliente = $('#nombre-cliente-input').val();
                var direccionCliente = $('#direccion-cliente-input').val();
                var telefonoCliente = $('#telefono-cliente-input').val();
                var emailCliente = $('#email-cliente-input').val();
                var idVentas = $('#id-ventas2-input').val();
        
                var newRow = '<tr><td>' + idVentas + '</td><td>' + nombreCliente + '</td><td>' + direccionCliente + '</td><td>' + telefonoCliente + '</td><td>' + emailCliente + '</td></tr>';
        
                $('#tabla-body2').append(newRow);
              });
        
              $('[data-action="deletelastrow2"]').click(function() {
                if (rowCount2 > 0) {
                  $('#tabla-body2 tr:last-child').remove();
                  rowCount2--;
                }
              });
        
              $('[data-action="deletefirstrow2"]').click(function() {
                if (rowCount2 > 0) {
                  $('#tabla-body2 tr:first-child').remove();
                  rowCount2--;
                }
              });
            });
          </script>
        
        
        