@extends('adminlte::page')

@section('title', 'Trabajadores registrados')

@section('content_header')
    <div class="mb-2">
        <h1 class="mb-3 text-center"><b>PERSONAL AUTORIZADO PARA RECIBIR ACTIVOS</b></h1>
        <center>
            <a href="receptores/create" class="btn btn-info">CREAR RECEPTOR</a>
        </center>
    </div>
@stop

@section('content')

    <table id="tabla" class="table table-striped mt-4 text-center" style="width: 100%">
        <thead class="table-dark">
            <tr>
                <th>CÉDULA</th>
                <th>TRABAJADOR</th>
                <th>CARGO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receptores as $receptor)
                <tr>
                    <td>{{ $receptor->id }}</td>
                    <td>{{ $receptor->nombre_receptor }}</td>
                    <td>{{ $receptor->cargo }}</td>
                    <td>
                        <a href="/activos/{{ $receptor->id }}/edit" class="btn btn-warning mr-2">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable({
                "lengthMenu": [
                    [6, 10, 20, -1],
                    [6, 10, 20, "All"]
                ]
            });
        });
    </script>
@stop
