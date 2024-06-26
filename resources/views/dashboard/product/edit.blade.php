@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Nuevo producto</h1>
@stop

@section('content')
    <form action="{{ route('product.update', $product) }}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Actualizar producto</h3>
                <div class="card-tools">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class="badge badge-primary">Label</span>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @include('dashboard.product._form',['task' => 'edit'])
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary">Actualizar</button>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </form>
@stop