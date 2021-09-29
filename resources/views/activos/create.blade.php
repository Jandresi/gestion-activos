@extends('adminlte::page')

@section('title', 'Creación de activo')

@section('content_header')
    <h1 class="text-center"><b>CREAR NUEVO ACTIVO</b></h1>
@stop

@section('content')
    <form action="/activos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">CÓDIGO DE PRODUCTO</label>
            <input id="codigo_activo" name="codigo_activo" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input id="nombre_activo" name="nombre_activo" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">TIPO DE ACTIVO</label>
            <select name="tipo_activo" id="tipo_activo" class="form-control">
                <option selected="selected" disabled>Seleccione...</option>
                <option value="Medio guiado">Medio guiado</option>
                <option value="Domiciliario">Domiciliario</option>
                <option value="Red externa">Red externa</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control">
        </div>
        <a href="/activos" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
