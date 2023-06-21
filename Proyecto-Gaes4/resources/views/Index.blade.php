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
        <!--------Esta es toda la interfaz :D---------->
        <aside>

            <!-------- El Logo ---------->

            <div class="top">
                <div class="logo">
                    <img src="{{ asset('Imagenes/Please.png') }}" alt="">
                    <h2><span class="danger">PIS</span>TON</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>

                </div>
            </div>

            <!--------Los iconos :D---------->
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
                    <!--------Fin  Los iconos :D---------->
            </div>
        </aside>

        <!--------Fin de la  interfaz :D---------->
        <!--------=======================================---------->
        <!--------Seccion principal :D---------->
        <!--------Seccion de las tres cuadros :D---------->
        <main>

            <!--------  Interfaz del Administrador :D   ---------->
            <div class="right">
                <!--------  La clase top  :D ---------->
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-rounded">list</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-rounded active">brightness_6</span>
                        <span class="material-symbols-rounded">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hola,<b> Abril</b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="{{ asset('Imagenes/descarga.jpg') }}">
                        </div>
                    </div>
                </div>
                <!--------Titulo---------->
                <h1>Clientes</h1>
                <!--------Esta seccion obviamente si o si tiene que ser modificable para los demas modulos osease los tres cuadrados del dashboard---------->

                <!--------Este es el almanaque osease el calendario---------->
                <div class="date">
                    <input type="date">
                </div>

                <div class="insights">
                    <div class="sapito">
                        <div class="containerr">
                            <div class="form-group clearfix">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-xs-4"></div>
                                        </div>
                                    </div>
                                    <div class= "botones">
                                    <div class="col-md-20 offset-md-10">
                                        <button class="btn btn-danger pull-right" data-action="deletelastrow">Borra la
                                            última fila</button>
                                        <button class="btn btn-danger pull-right" data-action="deletefirstrow">Borra la
                                            primera fila</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="row addvalueBox">
                                            <div class="col-sm-6">
                                                <select class="form-control" id="identificacion-select">
                                                    <option value="">Seleccionar Identificacion</option>
                                                    <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                                                    <option value="Cedula Extranjeria">Cedula Extranjeria</option>
                                                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Ingresar identificacion"
                                                    class="form-control" id="identificacion-input" min="1"
                                                    max="100" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Nombre completo"
                                                    class="form-control" id="nombre-input" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control" id="fecha-input" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Direccion" class="form-control"
                                                    id="direccion-input" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Telefono" class="form-control"
                                                    id="telefono-input" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Ciudad" class="form-control"
                                                    id="ciudad-input" />
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Email" class="form-control"
                                                    id="email-input" />
                                            </div>
                                            <div class="col-sm-20 offset-sm-20">
                                                <button class="btn btn-success pull-right"
                                                    data-action="addrow">Añadir</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Identificacion</th>
                                                    <th>Numero de identificacion</th>
                                                    <th>Nombre completo</th>
                                                    <th>Fecha de nacimiento</th>
                                                    <th>Direccion</th>
                                                    <th>Telefono</th>
                                                    <th>Ciudad</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tabla-body">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
        </main>
    </div>


    </div>

    </main>
    </div>

    <!-------- Fin de la seccion principal :D ---------->



    <script>
        const addRowButton = document.querySelector('[data-action="addrow"]');
        const deleteFirstRowButton = document.querySelector('[data-action="deletefirstrow"]');
        const deleteLastRowButton = document.querySelector('[data-action="deletelastrow"]');
        const finalizeSaleButton = document.querySelector('[data-action="finalizesale"]');
        const tableBody = document.getElementById('tabla-body');

        addRowButton.addEventListener('click', function() {
            const identificacionSelect = document.getElementById('identificacion-select');
            const identificacionInput = document.getElementById('identificacion-input');
            const nombreInput = document.getElementById('nombre-input');
            const fechaInput = document.getElementById('fecha-input');
            const direccionInput = document.getElementById('direccion-input');
            const telefonoInput = document.getElementById('telefono-input');
            const ciudadInput = document.getElementById('ciudad-input');
            const emailInput = document.getElementById('email-input');


            const newRow = document.createElement('tr');

            const identificacionCell = document.createElement('td');
            identificacionCell.textContent = identificacionSelect.value;
            newRow.appendChild(identificacionCell);

            const identificacionNumCell = document.createElement('td');
            identificacionNumCell.textContent = identificacionInput.value;
            newRow.appendChild(identificacionNumCell);

            const nombreCell = document.createElement('td');
            nombreCell.textContent = nombreInput.value;
            newRow.appendChild(nombreCell);

            const fechaCell = document.createElement('td');
            fechaCell.textContent = fechaInput.value;
            newRow.appendChild(fechaCell);

            const direccionCell = document.createElement('td');
            direccionCell.textContent = direccionInput.value;
            newRow.appendChild(direccionCell);

            const telefonoCell = document.createElement('td');
            telefonoCell.textContent = telefonoInput.value;
            newRow.appendChild(telefonoCell);

            const ciudadCell = document.createElement('td');
            ciudadCell.textContent = ciudadInput.value;
            newRow.appendChild(ciudadCell);

            const emailCell = document.createElement('td');
            emailCell.textContent = emailInput.value;
            newRow.appendChild(emailCell);

            tableBody.appendChild(newRow);

            // Limpiar los campos de entrada
            identificacionSelect.value = '';
            identificacionInput.value = '';
            nombreInput.value = '';
            fechaInput.value = '';
            direccionInput.value = '';
            telefonoInput.value = '';
            ciudadInput.value = '';
            emailInput.value = '';
        });

        deleteFirstRowButton.addEventListener('click', function() {
            const firstRow = tableBody.querySelector('tr');
            if (firstRow) {
                tableBody.removeChild(firstRow);
            }
        });

        deleteLastRowButton.addEventListener('click', function() {
            const lastRow = tableBody.querySelector('tr:last-child');
            if (lastRow) {
                tableBody.removeChild(lastRow);
            }
        });
    </script>

    <script src="{{ asset('js/Script1.js') }}"></script>
    <script src="{{ asset('js/orders.js') }}"></script>

</body>

</html>