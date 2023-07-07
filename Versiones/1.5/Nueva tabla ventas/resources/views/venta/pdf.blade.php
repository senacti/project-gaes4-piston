<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="invoice">
  <table>
    <tr>
      <td><h1 class="titul">PDF VENTAS</h1><br><h2 class="titul">Servicentro la 22</h2><br><br><br></td>
      <td><img src="Imagenes/logo.png" alt="Logo Servicentro la 22" /></td>
    </tr>
  </table>
  <br>
  <div class="table-responsive">
    <table id="invoiceDetails" class="table">
      <thead class="thead-dark">
        <tr>
        <th>ID venta</th>
                <th>Mecánico</th>
                <th>Porcentaje</th>
                <th>Marca del vehículo</th>
                <th>Modelo del vehículo</th>
                <th>Matrícula</th>
                <th>Vin Vehículo</th>
                <th>Fecha de pedido</th>
                <th>Servicio</th>
                <th>Producto</th>
                <th>Total</th>
        </tr>
      </thead>
      <tbody>
            @foreach ( $ventas as $venta )
            <tr>
                <td>{{ $venta->id }}</td>
                <td>{{ $venta->Mecanico }}</td>
                <td>{{ $venta->Porcentaje }}</td>
                <td>{{ $venta->MarcaDelVehiculo }}</td>
                <td>{{ $venta->ModeloVehiculo }}</td>
                <td>{{ $venta->Matricula }}</td>
                <td>{{ $venta->Vin }}</td>
                <td>{{ $venta->FechaDeSolicitud }}</td>
                <td>{{ $venta->Servicio }}</td>
                <td>{{ $venta->Producto }}</td>
                <td>{{ $venta->Total }}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
      
    <style>
      body {
        padding: 0rem;
      }
      
      .titul {
        text-align: center;
        font-family: Arial, sans-serif;
      }
      
      .invoice {
        margin: -1rem;
        max-width: 100rem;
        min-height: 1rem;
        padding: 0;
        line-height: 1rem;
        border-radius: 0.25rem;
        box-shadow: 0px 2px 7px -1px rgba(0, 0, 0, 0.5);
        font-family: Arial, sans-serif;
      }
      
      .invoice table {
        width: 100%;
      }
      
      .invoice th,
      .invoice td {
        border: 1px solid black;
        padding: 0;
        font-size: 14px;
        font-family: Arial, sans-serif;
      }
      
      .invoice th {
        background-color: #333;
        color: yellow;
      }
      
      .invoice tr:nth-child(even) {
        background-color: gray;
      }
      
      .invoice tr:hover {
        background-color: red;
      }
      
      img {
        width: 150px;
        display: block;
        margin-left: 10rem;
      }
      </style>
        








