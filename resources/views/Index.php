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
    <title>Clientes</title>
    <link rel="stylesheet" href="{{asset('css/css1.css') }}">

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
          <!--------Titulo---------->
          <h1>Clientes</h1>
          <!--------Esta seccion obviamente si o si tiene que ser modificable para los demas modulos osease los tres cuadrados del dashboard---------->
         
                <!--------Este es el almanaque osease el calendario---------->
                     <div class="date">
                         <input type="date">
                     </div>
                     <!--------Contenido de los tres cuadrados, iconos, informacion importante---------->
                      <!--------Contenido ventas obtenidas---------->
                    
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 
                                 <!-------- Subtitulo ---------->
                                
                                <!--------Fin  Contenido de los tres cuadrados, iconos, informacion importante---------->
          <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                           
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                
                                 <!-------- Subtitulo ---------->
                               
           <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                          
                                 <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                
                        <!-------- Subtitulo ---------->

                               

                       
                    <!--------Fin de la Seccion de las tres cuadros :D---------->      
                <div class="insights">
                    
                    <div>
    
                      <form class="formulario" >
                      <label for="fname">Nombres:</label><br><br>
                      <input class="textfield" type="text" id="fname" name="Nombres" value="" required><br><br>
                      <label for="lname">Apellidos:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="Apellidos" value="" required><br><br>

                      <label for="Fecha">Fecha de nacimiento:</label><br>
                        <div class="date">
                        <input type="date" id="Fecha" name="Fecha">
                        </div><br><br>

                      <label for="documento">Elija tipo de documento:</label><br><br>
                        <select class="textfield" id="documento" name="documento" required>
                        <option value="text">Cedula de ciudadania</option>
                        <option value="text">Tajeta de identidad</option>
                        <option value="text">cedula de extranjeria</option>
                    
                    </select><br><br>


                        <label for="lname">Ingrese numero del documento:</label> <br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">Direccion:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">Marca Vehiculo:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>
                      
                      <label for="lname">Modelo Vehiculo:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">Matricula:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">VIN:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">Numero de placa:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <label for="lname">Color del vehiculo:</label><br><br>
                      <input class="textfield" type="text" id="lname" name="lname" value="" required><br><br>

                      <input class="buttonr" type="submit" value="Registrarse">
                    </form> 
                </div>  
            
                </div>
        <!--------Informacion Cliente vehiculo la tabla :D---------->      
               
        <div class="recent-order">
            <h2>Informacion Cliente / Vehiculo</h2>
            <table>
                 <!-------- Tablas ---------->
                <thead>
                    <tr>
                        <th>Datos del cliente</th>
                        <th>VIN del Vehiculo</th>
                        <th>Placa del Vehiculo</th>
                        <th>Marca del Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Servicio/s solicitado/s</th>
                        <th>Fecha en que se inicio el pedido/s</th>
                        <th>Fecha en que se finaliza el pedido/s</th>
                        <th>Estatus</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Felipe Barrios</td>
                        <td>ABDCEFG</td>
                        <td>AD474A</td>
                        <td>Mazda</td>
                        <td>Mazda Furai Sport</td>
                        <td>Cambio de Aceite</td>
                        <td>10/01/2024</td>
                        <td>20/01/2024</td>
                        <td class="warning">Pendiente</td>
                        <td class="primary" ><a href="#">Mas detalles</a></td>
                    </tr>
                   
                     <!-------- Fin tablas ---------->
                </tbody>
             <!-------- Subtitulo ---------->
            </table>
            <a href="#">Muestrame mas</a>
        </div>
                     
         </main>
             <!-------- Fin de la seccion principal :D ---------->
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
       <!-------- Fin de la clase top  :D ---------->
       <!-------- Cuadro de la Derecha :D ---------->
       <div class="recent-updates">
        <h2>Detalles del servicio</h2>
        <div class="updates">
            <div>
         <!--Contenido-->
            </div>

       </div>
<!-------- Fin Cuadro de la Derecha :D ---------->
<!--------  Cuadro abajo de la Derecha :D ---------->
<div class="receipt">
    <h2>Factura Servicio</h2>
    <div class="item">
        <!--Contenido-->
    </div>
  </div>          







      </div>


    </div>  

    <script src="{{ asset('js/Script1.js') }}"></script>
    <script src="{{ asset('js/orders.js') }}"></script>

</body>
</html>