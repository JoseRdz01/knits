@extends('adminlte::page')

@section('title', 'Examen Knits')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.articulos.create')}}" class="btn btn-secondary">Crear</a>
        </div>
        <div class="card-body">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>SKU</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{$articulo->id}}</td>
                            <td>{{$articulo->SKU}}</td>
                            <td>{{$articulo->nombre}}</td>
                            <td>{{$articulo->descripcion}}</td>
                            <td>{{$articulo->costo}}</td>
                            <td width="10px">
                                <a href="{{route('admin.articulos.edit', $articulo)}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.articulos.destroy', $articulo)}}" method="POST">
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