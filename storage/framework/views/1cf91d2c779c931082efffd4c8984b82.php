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
  <link rel="stylesheet" href="<?php echo e(asset('css/Ventas.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/ventas2.css')); ?>">
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="<?php echo e(asset('Imagenes/Please.png')); ?>" alt="">
          <h2><span class="danger">PIS</span>TON</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>
      <div class="sidebar">
        <a href="<?php echo e(url('/dashboard')); ?>" class="active">
          <span class="material-symbols-rounded">dashboard</span>
          <h3>Dashboard</h3>
        </a>
        <a href="<?php echo e(url('/clientes')); ?>">
          <span class="material-icons-sharp">people</span>
          <h3>Clientes</h3>
        </a>
        <a href="<?php echo e(url('/productosyservicios')); ?>">
          <span class="material-icons-sharp">inventory</span>
          <h3>Productos y Servicios</h3>
          <span class="message-count">0</span>
        </a>
        <a href="<?php echo e(url('/mecanicos')); ?>">
          <span class="material-symbols-rounded">plumbing</span>
          <h3>Mecanicos</h3>
        </a>
        <a href="<?php echo e(url('/ventas')); ?>">
          <span class="material-symbols-outlined">add_task</span>
          <h3>Ventas</h3>
        </a>
        <a href="<?php echo e(url('/historialeinformes')); ?>">
          <span class="material-symbols-rounded">history </span>
          <h3>Historial de ventas e informes</h3>
        </a>
        <a href="<?php echo e(url('/error500')); ?>">
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
          </head>
          <body>
            <h1>Asignar Mecanicos</h1>
            <div class="recent'order">
              <div class="containerr">
                <div class="form-group clearfix">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="row">
                        <div class="col-xs-4"></div>
                      </div>
                    </div>
                    <div class="col-md-10 offset-md-7 mt-1">
                      <button class="btn btn-danger pull-right" data-action="deletefirstrow1">Borrar la primera fila</button>
                      <button class="btn btn-danger pull-right" data-action="deletelastrow1">Borrar la última fila</button>
                    </div>
                  </div>
                </div>
                <div class="form-group clearfix">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="row addvalueBox">
                        <div class="col-sm-4 mt-1">
                          <select class="form-control" id="nombre-producto-select">
                            <option value="">Seleccionar Mecanicos</option>
                            <option value="Producto 1">Juan Felipe Barrios Hidalgo</option>
                            <option value="Producto 2">Julian David Barrios Hidalgo</option>
                            <option value="Producto 3">Me llamo Marcelo</option>
                          </select>
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="ID Mecanicos" class="form-control" id="id-producto-input"/>
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Nombre" class="form-control" id="cantidad-producto-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Apellido" class="form-control" id="descripcion-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Dirección" class="form-control" id="direccion-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Teléfono" class="form-control" id="telefono-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Email" class="form-control" id="email-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Ciudad" class="form-control" id="ciudad-input" />
                        </div>
                        <div class="col-md-4 mt-1">
                          <input type="text" placeholder="Especialidad" class="form-control" id="especialidad-input" />
                        </div>
                        <div class="col-sm-20 offset-sm-20 mt-1">
                          <button class="btn btn-success pull-right" data-action="addrow1">Añadir</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-20">
                      <div class="col-sm-20 addvalueBox1">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>ID Mecanicos</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Dirección</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                              <th>Ciudad</th>
                              <th>Especialidad</th>
                            </tr>
                          </thead>
                          <tbody id="display">
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>
            <script src="main.js"></script>
          </body>
        </html>
      </main>
      <?php /**PATH C:\xampp\htdocs\Proyecto-Gaes4\resources\views/Mecanicos.blade.php ENDPATH**/ ?>