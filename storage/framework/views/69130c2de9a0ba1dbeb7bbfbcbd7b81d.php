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
              <div class="col-md-20 offset-md-7 mt-1">
                <button class="btn btn-danger pull-right" data-action="deletelastrow">Borra la última fila</button>
                <button class="btn btn-danger pull-right" data-action="deletefirstrow">Borra la primera fila</button>
              </div>
            </div>
          </div>
          <div class="form-group clearfix">
        <div class="row">
          <div class="col-sm-7">
            <div class="row addvalueBox">
              <div class="col-sm-4 mt-1">
                <select class="form-control" id="mecanico-select">
                  <option value="">Seleccionar Mecánico</option>
                  <option value="Mecánico 1">Mecánico 1</option>
                  <option value="Mecánico 2">Mecánico 2</option>
                  <option value="Mecánico 3">Mecánico 3</option>
                </select>
              </div>
              <div class="col-md-4 mt-1">
                <input type="number" placeholder="Asignar porcentaje (1%-100%)" class="form-control" id="porcentaje-input" min="1" max="100" />
              </div>
              <div class="col-md-4 mt-1">
                <select class="form-control" id="marca-select">
                  <option value="">Seleccionar Marca del Vehículo</option>
                  <option value="Marca 1">Marca 1</option>
                  <option value="Marca 2">Marca 2</option>
                  <option value="Marca 3">Marca 3</option>
                </select>
              </div>
              <div class="col-md-4 mt-1">
                <input type="text" placeholder="Modelo del vehículo" class="form-control" id="modelo-input" />
              </div>
              <div class="col-md-4 mt-1">
                <input type="text" placeholder="Matrícula" class="form-control" id="matricula-input" />
              </div>
              <div class="col-md-4 mt-1">
                <input type="text" placeholder="Vin Vehículo" class="form-control" id="vin-input" />
              </div>
              <div class="col-md-4 mt-1">
                <input type="date" class="form-control" id="fecha-input" />
              </div>
              <div class="col-md-4 mt-1">
                <select class="form-control" id="servicio-select">
                  <option value="">Seleccionar Servicio</option>
                  <option value="Servicio 1">Servicio 1</option>
                  <option value="Servicio 2">Servicio 2</option>
                  <option value="Servicio 3">Servicio 3</option>
                </select>
              </div>
              <div class="col-md-4 mt-1">
                <select class="form-control" id="producto-select">
                  <option value="">Seleccionar Producto</option>
                  <option value="Producto 1">Producto 1</option>
                  <option value="Producto 2">Producto 2</option>
                </select>
              </div>
              <div class="col-md-4 mt-1">
                <input type="text" placeholder="Total" class="form-control" id="total-input" />
              </div>
              <div class="col-sm-20 offset-sm-20 mt-1">
                <button class="btn btn-success pull-right" data-action="addrow">Añadir</button>
              </div>
            </div>
          </div>
          <div class="col-md-10 mt-2">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Mecánico</th>
                  <th>Porcentaje</th>
                  <th>Marca del vehículo</th>
                  <th>Modelo del vehículo</th>
                  <th>Matrícula</th>
                  <th>Vin Vehículo</th>
                  <th>Fecha en que se solicitó el pedido</th>
                  <th>Servicio</th>
                  <th>Producto</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody id="tabla-body">
              </tbody>
            </table>
            <div class="col-sm-20 offset-sm-20 mt-1">
  <button class="btn btn-primary pull-right" data-action="finalizarventa">Finalizar Venta</button>
</div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
  const addRowButton = document.querySelector('[data-action="addrow"]');
  const deleteFirstRowButton = document.querySelector('[data-action="deletefirstrow"]');
  const deleteLastRowButton = document.querySelector('[data-action="deletelastrow"]');
  const finalizeSaleButton = document.querySelector('[data-action="finalizesale"]');
  const tableBody = document.getElementById('tabla-body');

  addRowButton.addEventListener('click', function () {
    const mecanicoSelect = document.getElementById('mecanico-select');
    const porcentajeInput = document.getElementById('porcentaje-input');
    const marcaSelect = document.getElementById('marca-select');
    const modeloInput = document.getElementById('modelo-input');
    const matriculaInput = document.getElementById('matricula-input');
    const vinInput = document.getElementById('vin-input');
    const fechaInput = document.getElementById('fecha-input');
    const servicioSelect = document.getElementById('servicio-select');
    const productoSelect = document.getElementById('producto-select');
    const totalInput = document.getElementById('total-input');

    const newRow = document.createElement('tr');

    const mecanicoCell = document.createElement('td');
    mecanicoCell.textContent = mecanicoSelect.value;
    newRow.appendChild(mecanicoCell);

    const porcentajeCell = document.createElement('td');
    porcentajeCell.textContent = porcentajeInput.value;
    newRow.appendChild(porcentajeCell);

    const marcaCell = document.createElement('td');
    marcaCell.textContent = marcaSelect.value;
    newRow.appendChild(marcaCell);

    const modeloCell = document.createElement('td');
    modeloCell.textContent = modeloInput.value;
    newRow.appendChild(modeloCell);

    const matriculaCell = document.createElement('td');
    matriculaCell.textContent = matriculaInput.value;
    newRow.appendChild(matriculaCell);

    const vinCell = document.createElement('td');
    vinCell.textContent = vinInput.value;
    newRow.appendChild(vinCell);

    const fechaCell = document.createElement('td');
    fechaCell.textContent = fechaInput.value;
    newRow.appendChild(fechaCell);

    const servicioCell = document.createElement('td');
    servicioCell.textContent = servicioSelect.value;
    newRow.appendChild(servicioCell);

    const productoCell = document.createElement('td');
    productoCell.textContent = productoSelect.value;
    newRow.appendChild(productoCell);

    const totalCell = document.createElement('td');
    totalCell.textContent = totalInput.value;
    newRow.appendChild(totalCell);

    // Insertar la nueva fila en la primera posición
    tableBody.insertBefore(newRow, tableBody.firstChild);

    // Limpiar los campos de entrada
    mecanicoSelect.value = '';
    porcentajeInput.value = '';
    marcaSelect.value = '';
    modeloInput.value = '';
    matriculaInput.value = '';
    vinInput.value = '';
    fechaInput.value = '';
    servicioSelect.value = '';
    productoSelect.value = '';
    totalInput.value = '';
  });

  deleteFirstRowButton.addEventListener('click', function () {
    const firstRow = tableBody.querySelector('tr');
    if (firstRow) {
      tableBody.removeChild(firstRow);
    }
  });

  deleteLastRowButton.addEventListener('click', function () {
    const lastRow = tableBody.querySelector('tr:last-child');
    if (lastRow) {
      tableBody.removeChild(lastRow);
    }
  });

  finalizeSaleButton.addEventListener('click', function () {
    // Obtener todas las filas de la tabla
    const rows = Array.from(tableBody.querySelectorAll('tr'));

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
        rows.forEach(row => tableBody.removeChild(row));
      }
    };
    xhr.send(JSON.stringify(data));
  });
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Proyecto-Gaes4\resources\views/Ventas.blade.php ENDPATH**/ ?>