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
    <title>Productos</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Productos.css')); ?>">

</head>
<body>
    <div class="container">
        <!--------Esta es toda la interfaz :D---------->
       <aside>

        <!-------- El Logo ---------->
            
            <div class="top">
                <div class="logo">
                    <img src="<?php echo e(asset('Imagenes/Please.png')); ?>" alt="">
                    <h2><span class="danger">PIS</span>TON</h2>
                </div>
                <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>

                </div>
            </div> 

              <!--------Los iconos :D---------->
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
                         <!-------- El contador de los productos ---------->
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
          <h1>Productos y Servicios</h1>
          <!--------Esta seccion obviamente si o si tiene que ser modificable para los demas modulos osease los tres cuadrados del dashboard---------->
         
                <!--------Este es el almanaque osease el calendario---------->
                     <div class="date">
                         <input type="date">
                     </div>
                     <!--------Contenido de los tres cuadrados, iconos, informacion importante---------->
                      <!--------Contenido ventas obtenidas---------->
                     <div class="insights">
                         <div class="sales">
                             <span class="material-symbols-outlined">monetization_on</span>
                               <div class="middle">
                                 <div class="left">
                                 <h3>Ventas totales</h3>
                                 <h1>$2.000.000</h1>
                                 </div> 
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36"> </circle>
                                    </svg>
                                    <div class="number">
                                        <p>81%</p>
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                <small class="text-muted">Ultimas 24 horas</small>
                               </div> 
                                <!--------Fin  Contenido de los tres cuadrados, iconos, informacion importante---------->
          <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                            <div class="expenses">
                             <span class="material-symbols-outlined">shopping_cart_checkout</span>
                               <div class="middle">
                                 <div class="left">
                                 <h3>Gastos totales</h3>
                                 <h1>$2.000.000</h1>
                                 </div> 
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36"> </circle>
                                    </svg>
                                    <div class="number">
                                        <p>44%</p>
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                <small class="text-muted">Ultimas 24 horas</small>
                               </div> 
           <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                           <div class="saves">
                            <span class="material-symbols-outlined">savings</span>
                              <div class="middle">
                                <div class="left">
                                <h3>Ingreso totales</h3>
                                <h1>$2.000.000</h1>
                                </div> 
                                 <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                <div class="progress">
                                   <svg>
                                       <circle cx="38" cy="38" r="36"> </circle>
                                   </svg>
                                   <div class="number">
                                       <p>74%</p>
                                   </div>
                                 </div>
                               </div>
                        <!-------- Subtitulo ---------->

                               <small class="text-muted">Ultimas 24 horas</small>
                              </div> 

                         </div>
                    <!--------Fin de la Seccion de las tres cuadros :D---------->      
   
        <!--------Informacion Cliente vehiculo la tabla :D---------->      
              
        <div class="recent-order">
            <h2>PRODUCTOS Y SERVICIOS</h2>
            <table>
                 <!-------- Tablas ---------->
                <thead>
                    <tr>
                        <th>Productos</th>
                        <th>Servicios</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select>
                                <option value="">Selecciona un producto...</option>
                                <option value="producto1">Producto 1</option>
                                <option value="producto2">Producto 2</option>
                                <option value="producto3">Producto 3</option>
                            </select>
                            <button class="btn btn-editar">Editar</button>
                            <button class="btn btn-eliminar">Eliminar</button>
                        </td>
                        <td>
                            <select>
                                <option value="">Selecciona un servicio...</option>
                                <option value="servicio1">Servicio 1</option>
                                <option value="servicio2">Servicio 2</option>
                                <option value="servicio3">Servicio 3</option>
                            </select>
                            <button class="btn btn-editar">Editar</button>
                            <button class="btn btn-eliminar">Eliminar</button>

                               
                                   
                                    <tbody>
                                        <!-- Aquí se insertará la información del producto seleccionado -->
                                    
                                
                            <table id="tabla-secundaria">
                                <thead>
                                    <tr>
                                    <th>Producto/Servicio ID</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    </tr>
                        </td>
                    </tr>
                   
                     <!-------- Fin tablas ---------->
                    </table>
                    </tbody>
             <!-------- Subtitulo ---------->
          
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
                <img src="<?php echo e(asset('Imagenes/descarga.jpg')); ?>">
            </div>
            </div>
        </div>
       <!-------- Fin de la clase top  :D ---------->
       <!-------- Cuadro de la Derecha :D ---------->
       <div class="recent-updates">
        <h2>Detalles del servicio</h2>
        <div class="updates">
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

  <script src="<?php echo e(asset('js/Script1.js')); ?>"></script>
<script src="<?php echo e(asset('js/orders.js')); ?>"></script>
  
  
  </body>
  </html><?php /**PATH C:\Users\Cristian\Documents\GitHub\project-gaes4-piston\Proyecto-Gaes4\resources\views/Productos.blade.php ENDPATH**/ ?>