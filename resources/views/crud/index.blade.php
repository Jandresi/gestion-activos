@extends('adminlte::page')

@section('title', 'Activos en bodega')

@section('content_header')
    <h1>ACTIVOS REGISTRADOS</h1>
@stop

@section('content')
    <a href="activos/create" class="btn btn-primary mb-3">CREAR</a>

    <table id="activos" class="table table-striped mt-4 text-center" style="width: 100%">
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
                    <td>{{ $activo->codigo_referencia }}</td>
                    <td>{{ $activo->nombre_activo }}</td>
                    <td>{{ $activo->tipo_activo }}</td>
                    <td>{{ $activo->cantidad }}</td>
                    <td>
                        <form action="{{ route('activos.destroy', $activo->id) }}" method="POST">
                            <a href="/activos/{{ $activo->id }}/edit" class="btn btn-info">Editar</a>
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
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]
            });
        });
    </script>
@stop