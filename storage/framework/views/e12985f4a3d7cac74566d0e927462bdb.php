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
      <h1>Crear una venta</h1>
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
                  <div class="col-sm-20 offset-sm-20 mt-1">
                    <button class="btn btn-success pull-right" data-action="addrow1">Añadir</button>
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
                <div class="col-sm-20 offset-sm-20 mt-1">
                  <button class="btn btn-primary pull-right" data-action="finalizarventa1">Finalizar Venta</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h1>Crear una venta</h1>
      
      <div class="recent'order">
       
        <div class="containerr">
          <div class="form-group clearfix"> 
            <div class="row">
        <div class="col-md-10 offset-md-7 mt-1">
            <button class="btn btn-danger pull-right" data-action="deletefirstrow2">Borrar la primera fila</button>
            <button class="btn btn-danger pull-right" data-action="deletelastrow2">Borrar la última fila</button>
        </div>
              <div class="col-sm-7">
                <div class="row addvalueBox">
                  <div class="col-md-4 mt-1">
                    <input type="text" placeholder="ID Servicio" class="form-control" id="id-servicio-input"/>
                  </div>
                  <div class="col-sm-4 mt-1">
                    <input type="text" placeholder="Nombre del Servicio" class="form-control" id="nombre-servicio-input"/>
                  </div>
                  <div class="col-md-4 mt-1">
                    <input type="number" placeholder="Precio" class="form-control" id="precio-input" />
                  </div>
                  <div class="col-md-4 mt-1">
                    <input type="number" placeholder="ID Categoría de Servicios" class="form-control" id="id-categoria-servicio-input" />
                  </div>
                  <div class="col-sm-20 offset-sm-20 mt-1">
                    <button class="btn btn-success pull-right" data-action="addrow2">Añadir</button>
                  </div>
                </div>
              </div>
              <div class="col-md-10 mt-2">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID Servicio</th>
                      <th>Nombre del Servicio</th>
                      <th>Precio</th>
                      <th>ID Categoría</th>
                    </tr>
                  </thead>
                  <tbody id="tabla-body2">
                  </tbody>
                </table>
                <div class="col-sm-20 offset-sm-20 mt-1">
                  <button class="btn btn-primary pull-right" data-action="finalizarventa2">Finalizar Venta</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script>
        const addRowButton1 = document.querySelector('[data-action="addrow1"]');
        const deleteFirstRowButton1 = document.querySelector('[data-action="deletefirstrow1"]');
        const deleteLastRowButton1 = document.querySelector('[data-action="deletelastrow1"]');
        const finalizeSaleButton1 = document.querySelector('[data-action="finalizarventa1"]');
        const tableBody1 = document.getElementById('tabla-body1');

        addRowButton1.addEventListener('click', function () {
          const idProductoInput = document.getElementById('id-producto-input');
          const nombreProductoSelect = document.getElementById('nombre-producto-select');
          const cantidadProductoInput = document.getElementById('cantidad-producto-input');
          const descripcionInput = document.getElementById('descripcion-input');
          const idCategoriaInput = document.getElementById('id-categoria-input');
          const idVentasInput = document.getElementById('id-ventas-input');

          const newRow = document.createElement('tr');

          const idProductoCell = document.createElement('td');
          idProductoCell.textContent = idProductoInput.value;
          newRow.appendChild(idProductoCell);

          const nombreProductoCell = document.createElement('td');
          nombreProductoCell.textContent = nombreProductoSelect.value;
          newRow.appendChild(nombreProductoCell);

          const cantidadProductoCell = document.createElement('td');
          cantidadProductoCell.textContent = cantidadProductoInput.value;
          newRow.appendChild(cantidadProductoCell);

          const descripcionCell = document.createElement('td');
          descripcionCell.textContent = descripcionInput.value;
          newRow.appendChild(descripcionCell);

          const idCategoriaCell = document.createElement('td');
          idCategoriaCell.textContent = idCategoriaInput.value;
          newRow.appendChild(idCategoriaCell);

          const idVentasCell = document.createElement('td');
          idVentasCell.textContent = idVentasInput.value;
          newRow.appendChild(idVentasCell);

          // Insertar la nueva fila en la primera posición
          tableBody1.insertBefore(newRow, tableBody1.firstChild);

          // Limpiar los campos de entrada
          idProductoInput.value = '';
          nombreProductoSelect.value = '';
          cantidadProductoInput.value = '';
          descripcionInput.value = '';
          idCategoriaInput.value = '';
          idVentasInput.value = '';
        });

        deleteFirstRowButton1.addEventListener('click', function () {
          const firstRow = tableBody1.querySelector('tr');
          if (firstRow) {
            tableBody1.removeChild(firstRow);
          }
        });

        deleteLastRowButton1.addEventListener('click', function () {
          const lastRow = tableBody1.querySelector('tr:last-child');
          if (lastRow) {
            tableBody1.removeChild(lastRow);
          }
        });

        finalizeSaleButton1.addEventListener('click', function () {
          // Obtener todas las filas de la tabla
          const rows = Array.from(tableBody1.querySelectorAll('tr'));

          // Crear un arreglo para almacenar los datos de cada fila
          const data = rows.map(row => {
            const cells = Array.from(row.querySelectorAll('td'));
            return cells.map(cell => cell.textContent);
          });

          // Hacer la petición a PHP para enviar los datos
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'guardar_venta.php', true);
          xhr.setRequestHeader('Content-Type', 'application/json');
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // Borrar todas las filas después de enviar los datos
              rows.forEach(row => tableBody1.removeChild(row));
            }
          };
          xhr.send(JSON.stringify(data));
        });

        const addRowButton2 = document.querySelector('[data-action="addrow2"]');
        const deleteFirstRowButton2 = document.querySelector('[data-action="deletefirstrow2"]');
        const deleteLastRowButton2 = document.querySelector('[data-action="deletelastrow2"]');
        const finalizeSaleButton2 = document.querySelector('[data-action="finalizarventa2"]');
        const tableBody2 = document.getElementById('tabla-body2');

        addRowButton2.addEventListener('click', function () {
          const idServicioInput = document.getElementById('id-servicio-input');
          const nombreServicioInput = document.getElementById('nombre-servicio-input');
          const precioInput = document.getElementById('precio-input');
          const idCategoriaServicioInput = document.getElementById('id-categoria-servicio-input');

          const newRow = document.createElement('tr');

          const idServicioCell = document.createElement('td');
          idServicioCell.textContent = idServicioInput.value;
          newRow.appendChild(idServicioCell);

          const nombreServicioCell = document.createElement('td');
          nombreServicioCell.textContent = nombreServicioInput.value;
          newRow.appendChild(nombreServicioCell);

          const precioCell = document.createElement('td');
          precioCell.textContent = precioInput.value;
          newRow.appendChild(precioCell);

          const idCategoriaServicioCell = document.createElement('td');
          idCategoriaServicioCell.textContent = idCategoriaServicioInput.value;
          newRow.appendChild(idCategoriaServicioCell);

          // Insertar la nueva fila en la primera posición
          tableBody2.insertBefore(newRow, tableBody2.firstChild);

          // Limpiar los campos de entrada
          idServicioInput.value = '';
          nombreServicioInput.value = '';
          precioInput.value = '';
          idCategoriaServicioInput.value = '';
        });

        deleteFirstRowButton2.addEventListener('click', function () {
          const firstRow = tableBody2.querySelector('tr');
          if (firstRow) {
            tableBody2.removeChild(firstRow);
          }
        });

        deleteLastRowButton2.addEventListener('click', function () {
          const lastRow = tableBody2.querySelector('tr:last-child');
          if (lastRow) {
            tableBody2.removeChild(lastRow);
          }
        });

        finalizeSaleButton2.addEventListener('click', function () {
          // Obtener todas las filas de la tabla
          const rows = Array.from(tableBody2.querySelectorAll('tr'));

          // Crear un arreglo para almacenar los datos de cada fila
          const data = rows.map(row => {
            const cells = Array.from(row.querySelectorAll('td'));
            return cells.map(cell => cell.textContent);
          });

          // Hacer la petición a PHP para enviar los datos
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'guardar_venta.php', true);
          xhr.setRequestHeader('Content-Type', 'application/json');
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              // Borrar todas las filas después de enviar los datos
              rows.forEach(row => tableBody2.removeChild(row));
            }
          };
          xhr.send(JSON.stringify(data));
        });
      </script>
    </body>
  </html>
</main>
<?php /**PATH C:\xampp\htdocs\Proyecto-Gaes4\resources\views/Productos.blade.php ENDPATH**/ ?>