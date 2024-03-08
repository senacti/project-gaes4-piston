@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>Servicios </h1>

@stop
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('') }}
                            </span>

                             <div class="float-right">

                                <form action="{{ route('servicios.index') }}" method="get">
        <div class="input-group mb-3">
            <label for="nombre_servicio" class="mr-2">Nombre del servicio:</label>
            <input type="text" name="nombre_servicio" class="form-control" placeholder="Nombre del servicio" value="{{ request('nombre_servicio') }}">

            
            
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtrar</button>
                <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Limpiar</a>
            </div>
        </div>
    </form>

                                    <div class="text-right"> <!-- Alineación a la derecha -->


                                 <a href="{{ route('servicios.desactivadas') }}" class="btn btn-primary btn-sm" data-placement="right">
                                 {{ __('Servicios Desabilitados') }}
                             </a>

                                <a href="{{ route('servicios.pdf') }}" class="btn btn-warning btn-sm "  data-placement="left">
                                  {{ __('Reportes PDF') }}
                                </a>

                                <a href="{{ route('servicios.export') }}" class="btn btn-success btn-sm "  data-placement="left">
                                  {{ __('Reportes EXCEL') }}
                                </a>

                                <a href="{{ route('servicios.create') }}" class="btn btn-primary btn-sm "  data-placement="left">
                                  {{ __('Ingresar servicio') }}
                                </a>

                                

                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped nowrap" style="width: 100%">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre Servicio</th>
										<th>Precio Servicio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicios as $servicio)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $servicio->nombre_servicio }}</td>
											<td>{{ $servicio->precio_servicio }}</td>

                                            <td>

                                                <form action="{{ route('servicios.desactivar', $servicio->id) }}" method="POST">                                
    <a class="btn btn-sm btn-primary" href="{{ route('servicios.show', $servicio->id) }}">
        <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('servicios.edit', $servicio->id) }}">
        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
    </a>

                    @csrf
                @method('PATCH')
                <button type="submit"class="btn btn-sm btn-warning">Deshabilitar</button>
            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $servicios->links() !!}
            </div>
        </div>
    </div>
@endsection




@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css"
    rel="stylesheet"
  />

@stop


@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>

    <script>
        new DataTable('#example', {
        responsive: true,

        "language": {
            "lengthMenu": "Mostrar _MENU_ filas por página",
            "zeroRecords": "Datos no encontrados - sorry",
            "info": "Mostrandro la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros dispobles",
            "infoFiltered": "(Filtrado de _MAX_ filas en totals)",
            "search": 'Buscar:',
            "paginate": {
            "first":"Primero",
            "previous":"Anterior",
            "next":"Siguiente",
            "last":"Último"}
        }

        })
    </script>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


@stop


















