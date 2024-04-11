@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de productos</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nuevo producto</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{ $product->name }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Nuevo producto</a>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
@stop