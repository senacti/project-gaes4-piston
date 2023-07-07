<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-html5-2.3.6/datatables.min.css"
      rel="stylesheet"
    />
    <title>Mecanicos</title>

   <style>
      table.dataTable thead {
        background: linear-gradient(to right, #ffcd03, #ffcd03);

      }

      </style>

  </head>
  <body>
    <h1></h1>
     <div class="container">
         @yield('contenido')
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $("#example").DataTable({
        "language":{
          "url":"https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
        }
      });
    </script>
  </body>
</html>
