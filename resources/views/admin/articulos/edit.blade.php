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
    <div class="card-body">
        {!! Form::model($articulo, ['route' => ['admin.articulos.update', $articulo], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('SKU', 'SKU', []) !!}
                {!! Form::text('SKU', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre', 'Nombre', []) !!}
                {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion', []) !!}
                {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('costo', 'Costo', []) !!}
                {!! Form::text('costo', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Actualizar Articulo', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop