@extends('home')
@section('contenido')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Lista productos</h3>
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
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Imagen</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{ $product->id }} </td>
                        <td> {{ $product->name }} </td>
                        <td> {{ $product->description }} </td>
                        <td> ${{ number_format($product->price) }} </td>
                        <td> 
                            @if (isset($product->category->name))
                            {{ $product->category->name }} 
                            @endif 
                        </td>
                        <td> <img src="{{ url('image').'/'.$product->image  }}" width="80" height="80"> </td>
                        <td><a href="{{ route('product.edit', $product) }}">Editar</a>  </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {!! $products->links() !!}
            <a href="{{ route('product.create') }}" class="btn btn-primary">Nuevo producto</a>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
@stop