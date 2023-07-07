@extends('layouts.plantillabase')
@section('contenido')
<div class="container">


                
                
                
                
            
            <form action="{{ url('/venta') }}" method="post" enctype="multipart/form-data">
                @csrf
            @include('venta.form',['modo'=>'Crear'])
            
            </form>
        
    

</div>
@endsection