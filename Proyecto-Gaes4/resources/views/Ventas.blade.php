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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Reportes</title>
  <link rel="stylesheet" href="{{asset('css/Ventas.css') }}">
  <link rel="stylesheet" href="{{asset('css/ventas2.css') }}">
</head>
<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="{{ asset('Imagenes/Please.png') }}" alt="">
          <h2><span class="danger">PIS</span>TON</h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>
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
          <h3>Añadir Módulos</h3>
        </a>
        <a href="#">
          <span class="material-icons-sharp">logout</span>
          <h3>Salir</h3>
        </a>
      </div>
    </aside>
    <main>
      <div class="sapito">
        <div class="containerr">
          <div class="form-group clearfix">
            <div class="row">
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-xs-4"></div>
                </div>
              </div>
              <div class="col-md-20 offset-md-10">
                <button class="btn btn-danger pull-right" data-action="deletelastrow">Borra la última fila</button>
                <button class="btn btn-danger pull-right" data-action="deletefirstrow">Borra la primera fila</button>
              </div>
            </div>
          </div>
          <div class="form-group clearfix">
            <div class="row">
              <div class="col-sm-7">
                <div class="row addvalueBox">
                  <div class="col-sm-6">
                    <input type="text" placeholder="Enter City1" class="form-control" />
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Enter City2" class="form-control" />
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Enter City2" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <button class="btn btn-success" data-action="addlastrow">Añadir</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script src="{{ asset('js/Script1.js') }}"></script>
  <script src="{{ asset('js/Ventas.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    (function ($) {
      $.fn.createTable = function (options) {
        var content = "<table class='table table-bordered table-striped'>";
        if (options.thead.length > 0) {
          content += "<thead><tr>";
          if (options.tbody.length > 0) {
            for (i = 0; i < options.thead.length; i++) {
              content += "<th>" + options.thead[i] + "</th>";
            }
          }
          content += "</tr></thead>";
          content += "<tbody>";
          for (i = 0; i < options.tbody.length; i++) {
            content += "<tr>";
            for (j = 0; j < options.thead.length; j++) {
              content += "<td>" + options.tbody[i][j] + "</td>";
            }
            content += "</tr>";
          }
          content += "</tbody>";
        }
        content += "</table>";
        this.append(content);
      };
      $.fn.deleteRow = function (txt, action) {
        action = action || "initialize";
        var no = 0;
        $(".table tbody tr td").each(function (index) {
          var tt = $(".table tbody tr td:eq(" + index + ")").text();
          if (tt == txt) {
            no = index;
          }
        });
        if (action == "deletelastrow") {
          $(".table tbody tr:last").remove();
        } else if (action == "deletefirstrow") {
          $(".table tbody tr:first").remove();
        } else if (action == "deleterow") {
          $(".table tbody tr:eq(" + no + ")", this).remove();
        }
      };
      $.fn.addRow = function (slno, action) {
        action = action || "initialize";
        var content = "";
        var sl = parseInt(slno) + 1;
        var numCols = $(".table tbody").find("tr")[0].cells.length;
        if (action == "addlastrow") {
          var j = 0;
          content += "<tr><td>" + sl + "</td>";
          for (i = 1; i < numCols; i++, j++) {
            content +=
              "<td>" +
              $(".addvalueBox input[type=text]:eq(" + j + ")").val() +
              "</td>";
          }
          content += "</tr>";
          console.log(content);
          $(".table tr:last").after(content);
        }
      };
    })(jQuery);
    $(document).ready(function () {
      $(".containerr").createTable({
        thead: [
          "Mecanico Encargado",
          "Porcentaje de Mecanico",
          "Placa",
          "Marca Vehiculo",
          "Vin Vehiculo",
          "Modelo Vehiculo",
          "Fecha en que se solicito el Pedido/s",
          "Servicio",
          "Producto",
          "Total"
        ],
        tbody: [
          [, ,],
          [, ,],
          [, ,],
          [, ,],
          [, ,],
          [, ,]
        ]
      });
      //remove table row
      $("button").click(function () {
        var getSelection = $(this).attr("data-action");
        var gettxt = $("#rowno").val();
        $(".containerr").deleteRow(gettxt, getSelection);
      });
      //add table row
      $("button").click(function () {
        var getSelection = $(this).attr("data-action");
        var slno = $(".table tbody tr:last td:first").text();
        $(".containerr").addRow(slno, getSelection);
      });
    });
  </script>
</body>
</html>