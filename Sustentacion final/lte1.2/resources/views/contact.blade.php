@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    




<x-app-layout>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contactanos</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Envianos un mensaje.</p>
          </div>
          @if (session()->has('success'))
          <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
              <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                  <div class="text-green-500 dark:text-gray-500">
                      <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  </div>
                  <div class="text-sm font-medium ml-3 ">Listo!.</div>
              </div>
              <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
              <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
              </div>
          </div>
      @endif           
        <form action="{{route('contact.send')}}" method="POST">
            @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    @error('name')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                      <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    @error('email')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
                      <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    @error('message')
                        <span class="text-red-500">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
                  </div>
                  
                </div>
          </form>    
          </div>
        </div>
      </section>    
</x-app-layout>


@stop
@section('content')

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
            "next":"Siguiente",
            "last":"Último"}
        }

        })
    </script>




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@stop