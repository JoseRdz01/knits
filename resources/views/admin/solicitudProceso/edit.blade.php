@extends('adminlte::page')

@section('title', 'Examen Knits')

@section('content_header')
    <h1>Edith</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($solicitud,['route' => ['admin.solicitud.store', $solicitud], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('clave', 'clave', []) !!}
                {!! Form::text('clave', null, ['class' => 'form-control']) !!}
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

            <div class="form-group">
                {!! Form::label('Articulos', 'Articulos', []) !!}
                {!! Form::select('items', $articulos, ['class' => 'form-control']) !!}
            </div>
            

            {{-- <div class="form-group" id="algo">
                {!! Form::label('Articulos', 'Articulos', []) !!}
                {!! Form::select('items', $articulos, ['class' => 'form-control', 'id' => 'prueba']) !!}
                <a class="btn btn-danger" id="repeater">agregar</a>
            </div> --}}

            {!! Form::submit('Crear Articulo', ['class' => 'btn btn-primary']) !!}

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