@extends('adminlte::page')

@section('title', 'Creación tipo de activo')

@section('content_header')
    <h1>CREAR NUEVO TIPO DE ACTIVO</h1>
@stop

@section('content')
    <form action="/tipo-activos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">TIPO DE ACTIVO</label>
            <input name="nombre_tipo" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">DESCRIPCIÓN DE ESTE TIPO DE ACTIVO</label>
            <input name="descripcion_tipo" type="text" class="form-control">
        </div>

        <a href="/activos" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
