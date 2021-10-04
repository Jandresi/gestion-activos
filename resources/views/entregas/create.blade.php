@extends('adminlte::page')

@section('title', 'Entrega de activos')

@section('content_header')
    <h1 class="text-center"><b>ENTREGAR ELEMENTOS</b></h1>
@stop

@section('content')
    <form action="/entregas" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">ENTREGA</label>
            <select name="user" class="form-control">
                @foreach ($sessions as $session)
                        <option value="{{$session->user_id}}">{{$session->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">RECIBE</label>
            <select name="receptor" class="form-control">
                <option value="" selected disabled>Seleccione un receptor...</option>
                @foreach ($receptors as $receptor)
                        <option value="{{$receptor->id}}">{{$receptor->nombre_receptor}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">ACTIVO A ENTREGAR</label>
            <select name="activo" class="form-control">
                <option value="" selected="selected" disabled>Seleccione el elemento a entregar...</option>
                @foreach ($elementos as $elemento)
                    <option value="{{$elemento->id}}">{{$elemento->codigo_referencia}} - {{$elemento->nombre_activo}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">CANTIDAD</label>
            <input id="cantidad" name="cantidad" type="number" class="form-control">
        </div>

        <a href="/entregas" class="btn btn-secondary">CANCELAR</a>
        <button class="btn btn-primary" type="submit">GUARDAR</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
