@extends('home')
@section('contenido')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Categorias</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Slug</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td> {{ $category->id }} </td>
                        <td> {{ $category->name }} </td>
                        <td> {{ $category->slug }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {!! $categories->links() !!}
            <a href="{{ route('category.create') }}" class="btn btn-primary">Nueva categoria</a>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
@stop