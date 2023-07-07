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
    <link rel="stylesheet" href="<?php echo e(asset('css/Historial y Informes.css')); ?>">
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
          <h1>Historial de ventas y informes</h1>
          <a href="<?php echo e(url('/generar-pdf')); ?>" target="_blank">Generar PDF</a>
          
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

    <script>
  // Capturar el evento de clic en el botón
  document.getElementById('generate-pdf').addEventListener('click', function() {
    // Enviar una solicitud al servidor para generar el PDF
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'generar_pdf.php', true); // Reemplaza 'generar_pdf.php' con la URL de tu script de generación de PDF en el servidor
    xhr.responseType = 'blob';

    xhr.onload = function(e) {
      if (this.status === 200) {
        // Crear un enlace de descarga para el archivo PDF generado
        var blob = new Blob([this.response], { type: 'application/pdf' });
        var downloadLink = document.createElement('a');
        downloadLink.href = window.URL.createObjectURL(blob);
        downloadLink.download = 'archivo.pdf'; // Nombre del archivo PDF para descargar
        downloadLink.click();
      }
    };

    xhr.send();
  });
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\Proyecto-Gaes4\resources\views/Historial de ventas y Informes.blade.php ENDPATH**/ ?>