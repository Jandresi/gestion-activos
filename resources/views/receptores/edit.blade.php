@extends('adminlte::page')

@section('title', 'Edición de receptor')

@section('content_header')
    <h1 class="text-center"><b>EDITAR REGISTRO</b></h1>
@stop

@section('content')
    <form action="/receptores/{{$receptor->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">CÉDULA</label>
            <input name="id" type="text" class="form-control" value="{{$receptor->id}}">
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">NOMBRES Y APELLIDOS</label>
            <input name="nombres" type="text" class="form-control" value="{{$receptor->nombre_receptor}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">CARGO</label>
            <input name="cargo" type="text" class="form-control" value="{{$receptor->cargo}}">
        </div>
        
        <a href="/receptores" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
