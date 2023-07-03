$<!doctype html>
<html lang="en">

<head>
  <title>REPORTE CLIENTES</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


<style>

.cabecera{
background-color: black;
color: yellow;
text-align: center; 
font-size: 16px;
}

.table{
border: 1px solid black;
padding: 0px;

}


.table th,
.table td{
  border: 1px solid black;
  padding: 0px;
  font-size: 14px; /* Cambiar el tamaño de fuente de las celdas de la tabla */
  font-family: Arial, sans-serif;


}



</style>


</head>

<body>
<img src="Public/Imagenes/logo.png" alt="" height="50px" width="50px">
<h1 class="text-center">CLIENTES</h1><br>
<table class="table table-dark table-striped mt-4"; class="table" >
    <thead class="cabecera">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Identificacion</th>
        <th scope="col">Nombres</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Ciudad</th>
      </tr>
    </thead>
    <tbody>    
      @foreach ($clientes as $cliente)
      <tr>
          <td>{{$cliente->id}}</td>
          <td>{{$cliente->identificacion}}</td>
          <td>{{$cliente->nombres}}</td>
          <td>{{$cliente->fecha_de_nacimiento}}</td>
          <td>{{$cliente->direccion}}</td>
          <td>{{$cliente->telefono}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente->ciudad}}</td>
              
      </tr>
      @endforeach
    </tbody>
  </table>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>