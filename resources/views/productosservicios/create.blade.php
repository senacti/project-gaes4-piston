
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('productosservicios') }}" method="post">

    @csrf

    @include('productosservicios.form', ['modo'=>'Crear '])



</form>
</div>
@endsection