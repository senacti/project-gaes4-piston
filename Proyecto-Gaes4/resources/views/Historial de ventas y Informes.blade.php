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
    <title>Historial de ventas y informes</title>
    <link rel="stylesheet" href="{{asset('css/Historial y Informes.css') }}">
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
          <h1>Historial de ventas y informes</h1>
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
            <center><h2>Informe de Ventas del dia seleccionado</h2></center> 
            
            <table>
                 <!-------- Tabla donde esta porcentaje mecanico---------->
                <thead>
                    <tr>
                        
                        <th>Nombre del cliente</th>
                        <th>Placa del Vehiculo</th>
                        <th>Marca del Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Mecanico encargado</th>
                        <th>Porcentaje del Mecanico</th>
                        <th>Fecha en que se solicito el pedido/s</th>
                        <th>Servicio/s solicitado/s</th>
                        <th>Producto/s solicitado/s</th>
                        <th>Precio Total</th>
                        
                        
                        
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>David</td>
                        <td>AD474A</td>
                        <td>Mazda</td>
                        <td>Mazda Furai Sport</td>
                        <td>Cristian</td>
                        <td>90%</td>
                        <td>10/01/2024</td>
                        <td>Cambio de Aceite $10.000</td>
                        <td>Quita Manchas $20.000</td>
                        <td>$30.000</td>
                      </tr>

                      <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Balanceo <br> $10.000</td>
                        <td>Quita Rayones $40.000</td>
                        <td>$50.000</td>
                        
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Revision General $10.000</td>
                        <td></td>
                        <td>$10.000</td>
                        
                      </tr>


                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      
                      </tr>

                      
                      
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Precio Final</b> <br> $90.000</td>
                      
                        
                        
                        
                        
                        <td class="primary" ><a href="#"></a></td>
                    </tr>
                    
                   
                     <!-------- Fin tablas ---------->
                </tbody>
             <!-------- Subtitulo ---------->
            </table>
            <a href="#"></a>
        </div>
        <div class="recent-order">
            <center><h2></h2></center> 
            
            <table>
                 <!-------- Tabla donde esta porcentaje mecanico---------->
                <thead>
                    <tr>
                        
                        <th>Nombre del cliente</th>
                        <th>Placa del Vehiculo</th>
                        <th>Marca del Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Mecanico encargado</th>
                        <th>Porcentaje del Mecanico</th>
                        <th>Fecha en que se solicito el pedido/s</th>
                        <th>Servicio/s solicitado/s</th>
                        <th>Producto/s solicitado/s</th>
                        <th>Precio Total</th>
                        
                        
                        
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>David</td>
                        <td>AD474A</td>
                        <td>Mazda</td>
                        <td>Mazda Furai Sport</td>
                        <td>Cristian</td>
                        <td>90%</td>
                        <td>10/01/2024</td>
                        <td>Cambio de Aceite $10.000</td>
                        <td>Quita Manchas $20.000</td>
                        <td>$30.000</td>
                      </tr>

                      <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Balanceo <br> $10.000</td>
                        <td>Quita Rayones $40.000</td>
                        <td>$50.000</td>
                        
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>


                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      
                      </tr>

                      
                      
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Precio Final</b> <br> $80.000</td>
                      
                        
                        
                        
                        
                        <td class="primary" ><a href="#"></a></td>
                    </tr>
                    
                   
                     <!-------- Fin tablas ---------->
                </tbody>
             <!-------- Subtitulo ---------->
            </table>
            <a href="#"></a>
        </div>

        <div class="recent-order">
            <center><h2></h2></center> 
            
            <table>
                 <!-------- Tabla donde esta porcentaje mecanico---------->
                <thead>
                    <tr>
                        
                        <th>Nombre del cliente</th>
                        <th>Placa del Vehiculo</th>
                        <th>Marca del Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Mecanico encargado</th>
                        <th>Porcentaje del Mecanico</th>
                        <th>Fecha en que se solicito el pedido/s</th>
                        <th>Servicio/s solicitado/s</th>
                        <th>Producto/s solicitado/s</th>
                        <th>Precio Total</th>
                        
                        
                        
                        
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>David</td>
                        <td>AD474A</td>
                        <td>Mazda</td>
                        <td>Mazda Furai Sport</td>
                        <td>Cristian</td>
                        <td>90%</td>
                        <td>10/01/2024</td>
                        <td>Cambio de Aceite $10.000</td>
                        <td>Quita Manchas $20.000</td>
                        <td>$30.000</td>
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><br></td>
                        <td></td>
                        <td></td>
                        
                      </tr>

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      </tr>


                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      
                      </tr>

                      
                      
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                      
                        
                        
                        
                        
                        <td class="primary" ><a href="#"></a></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Precio Final</b><br> $30.000</td>
                        
                        
                      
                        
                        
                        
                        
                        <td class="primary" ><a href="#"></a></td>
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
       <!-------- Cuadro de la Derecha :D
       <div class="recent-updates">
        <h2><center> Detalles del servicio</center></h2>
        <div class="updates">
            <p> 
        </div>
        ---------->


       </div>
<!-------- Fin Cuadro de la Derecha :D ---------->
<!--------  Cuadro abajo de la Derecha :D 
<div class="receipt">
    <h2><center> Factura Servicio<center></h2>
    <div class="item">
    </div>
  </div>     

  ---------->






      </div>


    </div>  

    <script src="{{ asset('js/Script1.js') }}"></script>
    <script src="{{ asset('js/orders.js') }}"></script>

</body>
</html>