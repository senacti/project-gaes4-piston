<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="invoice">
  <table>
    <tr>
      <td><h1 class="titul">PDF MECANICOS</h1><br><h2 class="titul">Servicentro la 22</h2><br><br><br></td>
      <td><img src="Imagenes/logo.png" alt="Logo Servicentro la 22" /></td>
    </tr>
  </table>
  <br>
  <div class="table-responsive">
    <table id="invoiceDetails" class="table">
      <thead class="thead-dark">
        <tr>
                      <th scope="col">ID</th>
                      <th scope="col">CEDULA</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDO</th>
                      <th scope="col">DIRECCION</th>
                      <th scope="col">TELEFONO</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">CIUDAD</th>
                      <th scope="col">ESPECIALIDAD</th>
        </tr>
      </thead>
      <tbody>
        @Foreach($mecanicos as $mecanico)

        <tr>
            <td>{{$mecanico->id}}</td>
            <td>{{$mecanico->cedula}}</td>
            <td>{{$mecanico->nombre}}</td>
            <td>{{$mecanico->apellido}}</td>
            <td>{{$mecanico->direccion}}</td>
            <td>{{$mecanico->telefono}}</td>
            <td>{{$mecanico->email}}</td>
            <td>{{$mecanico->ciudad}}</td>
            <td>{{$mecanico->especialidad}}</td>
            
        </tr>
        



        @endForeach
        
      </tbody>
      
    </table>



    <style>
body {
  padding: 1rem;
}

.titul{
  text-align: center;
  font-family: Arial, sans-serif;
}
.invoice {
  margin: -1rem;
  max-width: 100rem;
  min-height: 10rem;
  padding: 0rem;
  line-height: 1rem;
  border-radius: 0.25rem;
  box-shadow: 0px 2px 7px -1px rgba(0, 0, 0, 100);
  font-family: Arial, sans-serif;
}

.invoice table {
  width: 100%;
  font-family: Arial, sans-serif;
}

.invoice table th,
.invoice table td {
  border: 1px solid black;
  padding: 0px;
  font-size: 14px; /* Cambiar el tamaño de fuente de las celdas de la tabla */
  font-family: Arial, sans-serif;
}

.invoice table tr th {
  background-color: #333;
  color: yellow;
  font-family: Arial, sans-serif;
}

.invoice table tr:nth-child(even) {
  background-color: gray;
  font-family: Arial, sans-serif;
}

.invoice table tr:hover {
  background-color: red;
}

.input-group {
  align-items: center;
}

img {
  width: 150px;
  display: block;
  margin-left: 10rem;
}

.inline {
  display: inline;
  padding-left: 5px;
}

@media screen and (max-width: 2rem) {
  body {
    padding: 0rem;
  }

  .invoice {
    padding: 10rem;
    max-width: 10%;
  }

  .input-group-prepend {
    display: none;
  }
}

</style>






  