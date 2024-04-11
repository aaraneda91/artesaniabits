@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Nuevo producto</h1>
@stop

@section('content')
    <form action="{{ route('product.store') }}" method="post">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nuevo producto</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-primary">Label</span>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            
                @include('dashboard.product._form')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary">Guardar</button>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </form>
@stop