@extends('adminlte::page')

@section('title', 'Creación de trabajador')

@section('content_header')
    <h1 class="text-center"><b>CREAR NUEVO RECEPTOR</b></h1>
@stop

@section('content')
    <form action="/receptores" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">CÉDULA DEL TRABAJADOR</label>
            <input name="id" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NOMBRES Y APELLIDOS</label>
            <input name="nombres" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">CARGO</label>
            <input name="cargo" type="text" class="form-control">
        </div>

        <a href="/receptores" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
