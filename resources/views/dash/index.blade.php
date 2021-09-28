@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido</h1>
@stop

@section('content')
    <a href="/articulos" class="btn btn-primary">Consultar artículos</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop