@extends('adminlte::page')

@section('title', 'Examen Knits')

@section('content_header')
    <h1>Index</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.solicitud.create')}}" class="btn btn-secondary">Crear Solicitud</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Fecha De Produccion</th>
                        <th>Total De Items</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitud)
                        <tr>
                            <td>{{$solicitud->id}}</td>
                            <td>{{$solicitud->clave}}</td>
                            <td>{{$solicitud->fecha_produccion}}</td>
                            <td>{{$solicitud->total_item}}</td>
                            <td>{{$solicitud->costo}}</td>
                            <td width="10px">
                                <a href="{{route('admin.solicitud.edit', $solicitud)}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.solicitud.destroy', $solicitud)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop