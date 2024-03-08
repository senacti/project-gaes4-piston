@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion de empleados</h1>

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
                         
    <form action="{{ route('mecanicos.index') }}" method="get">
        <div class="input-group mb-3">
            <label for="cedula" class="mr-2">Cedula del empleado:</label>
            <input type="text" name="cedula" class="form-control" placeholder="Cedula del empleado" value="{{ request('cedula') }}">

            <label for="especialidad"class="ml-2 mr-2">Especialidad del mecanico:</label>
            <input type="text" name="especialidad" class="form-control" placeholder="Especialidad mecanico" value="{{ request('especialidad') }}">
            
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Filtrar</button>
                <a href="{{ route('mecanicos.index') }}" class="btn btn-secondary">Limpiar</a>
            </div>
        </div>
    </form>

                        <div class="text-right"> <!-- Alineación a la derecha -->
                         
                            
                            <a href="{{ route('mecanicos.desactivadas') }}" class="btn btn-primary btn-sm" data-placement="right">
                                 {{ __('Mecanicos Desabilitados') }}
                             </a>

                            <a href="{{ route('mecanicos.pdf') }}" class="btn btn-warning btn-sm "  data-placement="left">
                              {{ __('Reporte PDF') }}

                            </a>

                            <a href="{{ route('mecanicos.export') }}" class="btn btn-success btn-sm "  data-placement="left">
                              {{ __('Reporte EXCEL') }}

                            </a>
                            
                            <a href="{{ route('mecanicos.create') }}" class="btn btn-primary btn-sm "  data-placement="left">
                              {{ __('Ingresar Empleado') }}

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
                                    <th>ID</th>

                                    <th>Cedula</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Email</th>
                                    <th>Ciudad</th>
                                    <th>Especialidad</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mecanicos as $mecanico)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $mecanico->cedula }}</td>
                                        <td>{{ $mecanico->nombre }}</td>
                                        <td>{{ $mecanico->apellido }}</td>
                                        <td>{{ $mecanico->direccion }}</td>
                                        <td>{{ $mecanico->telefono }}</td>
                                        <td>{{ $mecanico->email }}</td>
                                        <td>{{ $mecanico->ciudad }}</td>
                                        <td>{{ $mecanico->especialidad }}</td>

                                        <td>
                                            

                                             <form action="{{ route('mecanicos.desactivar', $mecanico->id) }}" method="POST">                                
    <a class="btn btn-sm btn-primary" href="{{ route('mecanicos.show', $mecanico->id) }}">
        <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
    </a>
    <a class="btn btn-sm btn-success" href="{{ route('mecanicos.edit', $mecanico->id) }}">
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
            {!! $mecanicos->links() !!}
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
        $("#example").DataTable({
        responsive:true,

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
            "next":"siguientes",
            "last":"Último"}
        }

        })
    </script>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


@stop






