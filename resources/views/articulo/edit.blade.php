@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h2>Editar</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precios</label>
        <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" tabindex="4" value="{{$articulo->precio}}">
    </div>
    <button class="btn btn-primary" type="submit" tabindex="4">Guardar</button>
    <a href="/articulos" class="btn btn-danger" tabindex="5">Cancelar</a>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop