@extends('adminlte::page')

@section('title', 'Agregar Almacen')

@section('content_header')
    <h1>Agregar Almacen</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'admin.rutaAlmacen.store']) !!}

        @include('admin.views_almacenes.parts.form')

        {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop