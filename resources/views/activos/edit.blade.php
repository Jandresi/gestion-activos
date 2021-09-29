@extends('adminlte::page')

@section('title', 'Edición de activo')

@section('content_header')
    <h1 class="text-center"><b>EDITAR REGISTRO</b></h1>
@stop

@section('content')
    <form action="/activos/{{$activo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">CÓDIGO DE PRODUCTO</label>
            <input id="codigo_activo" name="codigo_activo" type="text" class="form-control" value="{{$activo->codigo_referencia}}" disabled>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">NOMBRE</label>
            <input id="nombre_activo" name="nombre_activo" type="text" class="form-control" value="{{$activo->nombre_activo}}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">TIPO DE ACTIVO</label>
            <select name="tipo_activo" id="tipo_activo" class="form-control">
                <option value="{{$activo->tipo_activo}}"  selected="selected">{{$activo->tipo_activo}}</option>
                <option value="Medio guiado">Medio guiado</option>
                <option value="Domiciliario">Domiciliario</option>
                <option value="Red externa">Red externa</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input id="cantidad" name="cantidad" type="text" class="form-control" value="{{$activo->cantidad}}">
        </div>
        <a href="/activos" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
