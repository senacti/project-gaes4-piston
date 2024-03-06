@extends('adminlte::page')



@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de empleados</h1>

    @livewire ('admin.users-index')

@stop
@section('content')