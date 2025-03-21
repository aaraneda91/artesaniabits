@extends('home')
@section('contenido')
    <div class="card">
        <div class="card-header" style="background-color: #203973; color: #fff">
            <h3 class="card-title">Productos</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered" id="dtProductos">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td id="tdProductId_{{ $product->id }}" > {{ $product->id }} </td>
                        <td id="tdProductName_{{ $product->id }}"> {{ $product->name }} </td>
                        <td id="tdProductDesc_{{ $product->id }}"> {{ $product->description }} </td>
                        <td id="tdProductPrice_{{ $product->id }}"> ${{ number_format($product->price) }} </td>
                        <td id="tdProductCategory_{{ $product->id }}"> 
                            @if (isset($product->category->name))
                            {{ $product->category->name }} 
                            @endif 
                        </td>
                        <!--<td> <img src="{{ url('image').'/'.$product->image  }}" width="80" height="80"> </td>-->
                        <!--<td><a href="{{ route('product.edit', $product) }}">Editar</a>  </td>-->
                        <td>
                            <div  id="btnEdit" type="button" class="btn btn-sm btn-primary contenedor-icono" data-toggle="modal" data-target="#exampleModal_{{ $product->id }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </td>
                        <!-- Modal -->
                        
                        @include('dashboard.product.modal-edit')
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>       
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {!! $products->links() !!}
            <!--<a href="#" class="btn btn-primary" datas-toggle="modal" data-target="#mdl_nuevoUsuario">Nuevo producto</a>-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdl_nuevoUsuario">Nuevo Producto</button>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

    <!-- Modal -->
    <div class="modal" id="mdl_nuevoUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        $(".btn_guardar_cambios").click(function(){

            var id = $(this).data('product-id');
            var name = $('#txtProductName_'+id).val();
            var description = $('#txtProductDesc_'+id).val();
            var price = $('#txtProductPrecio_'+id).val();
            var category_id = $('#slcCategories_'+id).val();
            // Obtén la URL base de Blade con un marcador de posición
            var baseUrl = "{{ route('product.update', 'REPLACE_ID') }}";
            // Reemplaza el marcador de posición con el valor real de 'id'
            var url = baseUrl.replace('REPLACE_ID', id);

            var data = {
                name: name,
                description: description,
                price: price,
                category_id: category_id,
                _token: '{{csrf_token()}}'
            };

            $.ajax({
                type: "put",
                url: url,
                data: data,
                success: function () {
                    $("#tdProductName_"+id).html(name)
                    $("#tdProductDesc_"+id).html(description)
                    $("#tdProductPrice_"+id).html(price)
                    Swal.fire({
                        title: "Guardado",
                        icon: "success"
                    });
                    
                },
                error: function (msg) {
                    Swal.fire({
                        title: "Error " + msg,
                        icon: "error"
                    });
                }
            });
        });
       
    </script>
@stop