@extends('adminlte::page')

@section('content_header')
    <h1>VISTA DE MOSTRAR REGISTROS</h1>
@stop

@section('content')
    <a href="activos/create" class="btn btn-primary">CREAR</a>

    <table class="table table-striped mt-4 text-center">
        <thead class="table-dark">
            <tr>
                <th>CÓDIGO</th>
                <th>NOMBRE</th>
                <th>TIPO</th>
                <th>CANTIDAD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activos as $activo)
                <tr>
                    <td>{{$activo->codigo_referencia}}</td>
                    <td>{{$activo->nombre_activo}}</td>
                    <td>{{$activo->tipo_activo}}</td>
                    <td>{{$activo->cantidad}}</td>
                    <td>
                        <form action="{{route ('activos.destroy', $activo->id)}}" method="POST">
                        <a href="/activos/{{$activo->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
