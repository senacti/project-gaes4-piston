<div class="invoice">
    <table>
      <tr>
        <td><h1 class="titul">PDF MECANICOS</h1><br><h2 class="titul">Servicentro la 22</h2><br><br><br></td>
        <td><img src="Imagenes/logo.png" alt="Logo Servicentro la 22" /></td>
      </tr>
    </table>
    <br>
    <div class="table-responsive">
        <table class="table" style="text-align:center;font-size:10px">
            <thead class="cabecera">
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


