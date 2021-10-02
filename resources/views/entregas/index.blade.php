@extends('adminlte::page')

@section('title', 'Pedidos')

@section('content_header')
    <div class="mb-2">
        <h1 class="mb-3 text-center p-2"><b>HISTORIAL DE PEDIDOS</b></h1>
    </div>
@stop

@section('content')

    <table id="entregas" class="table table-striped mt-4 text-center" style="width: 100%">
        <thead class="table-dark">
            <tr>
                <th>FECHA</th>
                <th>ENTREGA</th>
                <th>RECIBE</th>
                <th>ELEMENTO ENTREGADO</th>
                <th>UNIDADES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entregas as $entrega)
                <tr>
                    <td>{{ $entrega->created_at }}</td>
                    <td>{{ $entrega->creador }}</td>
                    <td>{{ $entrega->recibe }}</td>
                    <td>{{ $entrega->elemento }}</td>
                    <td>{{ $entrega->unidades }}</td>
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
            $('#entregas').DataTable({
                "lengthMenu": [
                    [6, 10, 20, -1],
                    [6, 10, 20, "All"]
                ]
            });
        });
    </script>
@stop
