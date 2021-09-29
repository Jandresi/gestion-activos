@extends('adminlte::page')

@section('title', 'Tipos de activos en bodega')

@section('content_header')
    <div class="mb-2">
        <h1 class="mb-3 text-center"><b>ACTIVOS REGISTRADOS</b></h1>
        <center>
            <a href="tipo-activos/create" class="btn btn-info">CREAR TIPO DE ACTIVO</a>
        </center>
    </div>
@stop

@section('content')

    <table id="tipos" class="table table-striped mt-4 text-center" style="width: 100%">
        <thead class="table-dark">
            <tr>
                <th>TIPO DE ACTIVO</th>
                <th>DESCRIPCIÓN DEL ACTIVO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td><b>{{ $tipo->tipo }}</b></td>
                    <td>{{ $tipo->descripcion }}</td>
                    <td>
                        <form action="{{ route('tipo-activos.destroy', $tipo->id) }}" method="POST">
                            <a href="/tipo-activos/{{ $tipo->id }}/edit" class="btn btn-warning mr-2">Editar</a>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#activos').DataTable({
                "lengthMenu": [
                    [6, 10, 20, -1], [6, 10, 20, "All"]
                ]
            });
        });
    </script>
@stop
