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
    <title>Reportes</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/Ventas.css')); ?>">

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
          <h1>Ventas</h1>
          <!--------Esta seccion obviamente si o si tiene que ser modificable para los demas modulos osease los tres cuadrados del dashboard---------->
         
                <!--------Este es el almanaque osease el calendario---------->
                     <div class="date">
                         <input type="date">
                     </div>
                     <!--------Contenido de los tres cuadrados, iconos, informacion importante---------->

                      <!--------Contenido ventas Servicios factura  ---------->
                     <div class="insights">
                         <div class="sales">
                             
                               <div class="middle">
                                 <div class="left">
                                 <h3>Servicios</h3>
                                 <link rel="stylesheet" type="text/css" href="estilos.css">
  
                                 <div class="Perro">
                                  <table class="Perro1">
                                    <thead class="Perro2">
                                      <tr>
                                        <th><h2>Servicios</h2></th>
                                        
                                        <th><h2>Precio</h2></th>
                                      </tr>
                                    </thead>
                                    <tbody class="sapo3">
                                      <tr>
                                        <td>Cambio de aceite</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                    
                                      
                                      <tr>
                                        <td>Correccion de Llantas</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Balanceo </td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Revision General</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Yisus Todo lo puede</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Yisus Todo lo puede</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      
                                      
                                    </tbody>
                                  </table>
                                  
                                </div>
                                <div class="nosepo">
                                <div class="muestrazz">
                                  <a class="muestraz" href="#">Muestrame mas</a>
                                </div>
                              </div>
                                        
                               
    
    
                                 
                                 </div> 
                               
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        
                                    </svg>
                                    <div class="number">
                                        
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                
                               </div> 
                               
                                <!--------Fin  Contenido de los tres cuadrados, iconos, informacion importante---------->
          <!--------==================================================================================================================================---------->
                           <!--------Contenido gastos obtenidas---------->
                           
                            <div class="expenses">
                             
                               <div class="middle">
                                 <div class="left">
                                 <h3>Factura</h3>
                                 <div class="gato">
                                  <table class="gato1">
                                    <thead class="gato2">
                                      <tr>
                                        <th><h2>Servicios <br>productos<br> </h2></th>
                                        
                                        <th><h2>Precio</h2></th>
                                      </tr>
                                    </thead>
                                    <tbody class="gato3">
                                      <tr>
                                        <td>Cambio de aceite</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Eliminar</button></td>
                                      </tr>
                                    
                                      
                                      <tr>
                                        <td>Correccion de Llantas</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Eliminar</button></td>
                                      </tr>
                                      <tr>
                                        <td>Balanceo </td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Eliminar</button></td>
                                      </tr>
                                      <tr>
                                        <td>Revision General</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Eliminar</button></td>
                                      </tr>
                                      <tr>
                                        <td>Yisus Todo lo puede</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Eliminar</button></td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        
                                        <td class="boton12"><button>Continuar</button></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                </div>
                                <div class="nosepo1">
                                <div class="muestrazz2">
                                  <a class="muestraz3" href="#"></a>
                                </div>
                              </div>
                                 
                                 
                                 </div> 
                                  <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                 <div class="progress">
                                    <svg>
                                        
                                    </svg>
                                    <div class="number">
                                        
                                    </div>
                                  </div>
                                </div>
                                 <!-------- Subtitulo ---------->
                                
                               </div> 
           <!--------==================================================================================================================================---------->
                           <!--------Contenido Ventas Productos---------->
                           <div class="saves">
                            
                            
                              <div class="middle">
                                <div class="left">
                                <h3>Productos</h3>
                                <div class="Perro">
                                  <table class="Perro1">
                                    <thead class="Perro2">
                                      <tr>
                                        <th><h2>Servicios</h2></th>
                                        
                                        <th><h2>Precio</h2></th>
                                      </tr>
                                    </thead>
                                    <tbody class="sapo3">
                                      <tr>
                                        <td>Aceite Fino</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                    
                                      
                                      <tr>
                                        <td>Aceite Barato</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Cambio de aceite</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Aceituna</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Llantas</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                      <tr>
                                        <td>Yisus Todo lo puede</td>
                                        
                                        <td>$100.000</td>
                                        <td><button>Añadir</button></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  
                                </div>
                                <div class="nosepo">
                                <div class="muestrazz">
                                  <a class="muestraz" href="#">Muestrame mas</a>
                                </div>
                                
                              </div>
                              
                                        
                                </div> 
                                
                                 <!--------Proceso para el tena de los porcentajes es decir las graficas circulares que hay que tener en cuenta para el modulo del Dashboard o ventas imagen circular svg ---------->
                                <div class="progress">
                                   <svg>
                                       
                                   </svg>
                                   <div class="number">
                                       
                                   </div>
                                 </div>
                               </div>
                        <!-------- Subtitulo ---------->

                               
                              </div> 

                         </div>
                    <!--------Fin de la Seccion de las tres cuadros :D---------->      
   
        <!--------Informacion Cliente vehiculo la tabla :D---------->      
              
        <div class="recent-order">
            <center><h2>Informacion de la Venta y Vehiculo</h2></center> 
            
            <table>
                 <!-------- Tabla donde esta porcentaje mecanico---------->
                <thead>
                    <tr>
                        
                        <th>Mecanico encargado</th>
                        <th>Porcentaje del Mecanico</th>
                        <th>Placa del Vehiculo</th>
                        <th>Marca del Vehiculo</th>
                        <th>Modelo del Vehiculo</th>
                        <th>Fecha en que se solicito el pedido/s</th>
                        <th>Servicio/s solicitado/s</th>
                        <th>Producto/s solicitado/s</th>
                        <th>Precio Total</th>
                        
                        
                        
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td>Cristian</td>
                        <td>90%</td>
                        <td>AD474A</td>
                        <td>Mazda</td>
                        <td>Mazda Furai Sport</td>
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
                        <td><b>Precio Final</b> <br> $50.000</td>
                      
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
                        <td><button>Finalizar Venta</button></td>
                      
                        
                        
                        
                        
                        <td class="primary" ><a href="#"></a></td>
                    </tr>
                    
                   
                     <!-------- Fin tablas ---------->
                </tbody>
             <!-------- Subtitulo ---------->
            </table>
            <a href="#"></a>
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
                    <p>Hola,<b>Abril</b></p>
                    <small class="text-muted"> Admin</small>
                </div>
            <div class="profile-photo">
                <img src="<?php echo e(asset('Imagenes/descarga.jpg')); ?>">
            </div>
            </div>
        </div>



       <!-------- Fin de la clase top  :D ---------->
       <!-------- Cuadro de la Derecha :D 
       <div class="recent-updates">
        <center><h2>Informacion del cliente</h2></center>
        <div class="updates">
            <p> 
               debitis, est asperiores autem in perferendis reprehenderit voluptas ad? Non maxime atque quo adipisci ex voluptates repudiandae, distinctio mollitia est perferendis, aperiam possimus cupiditate ad neque, dolorem delectus quae quod. Nobis quam doloribus repellendus tempora dolorum ipsa ut voluptates deserunt aut, delectus eos quod ducimus expedita velit perspiciatis ea repudiandae unde perferendis vitae enim aliquid animi nemo necessitatibus maiores. Reprehenderit commodi ipsam animi accusamus id reiciendis, rem porro dicta temporibus, mollitia totam recusandae quibusdam repellat!</p>
        </div>

       </div>
       :D ---------->
<!-------- Fin Cuadro de la Derecha :D ---------->
<!--------  Cuadro abajo de la Derecha :D 
<div class="receipt">
    <center><h2>Factura Servicio</h2></center>
    <div class="item">
     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, itaque expedita. Corrupti deleniti labore possimus tempore, eaque eum reiciendis nulla vero? Distinctio ratione illo nobis officia vero reprehenderit nemo ullam eaque incidunt tempora unde corporis similique magni sit aperiam itaque natus, quibusdam voluptas tenetur delectus, ea blanditiis debitis praesentium. Exercitationem ullam labore veritatis autem. Architecto pariatur commodi recusandae, voluptatum molestias, mollitia, quia magnam dolorum quos eveniet amet corrupti excepturi odio similique repellendus! Sit illum vitae animi. Corrupti, at. Quo repellat dicta necessitatibus harum consequatur et veniam, suscipit corrupti temporibus eaque labore facere animi ad. Ab exercitationem eius illum, saepe accusamus quo vero minima animi totam maxime unde commodi iusto cum.</p>        
    </div>
  </div>          
  :D ---------->






      </div>


    </div>  

    <script src="<?php echo e(asset('js/Script1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/orders.js')); ?>"></script>


</body>
</html><?php /**PATH C:\Users\Cristian\Documents\GitHub\project-gaes4-piston\Proyecto-Gaes4\resources\views/Ventas.blade.php ENDPATH**/ ?>