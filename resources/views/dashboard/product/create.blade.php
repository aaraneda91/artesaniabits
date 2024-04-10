@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo producto</h1>
@stop

@section('content')
    <form action="{{ route('productos.store') }}" method="post">
        @include('dashboard.product._form')
    </form>
@stop