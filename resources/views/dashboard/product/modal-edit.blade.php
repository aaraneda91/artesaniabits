
<div class="modal" id="exampleModal_{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="hddnProductId" value="{{ $product->id }}"></input>
                    <div class="mb-3">
                        <label for="txtProductName_{{ $product->id }}" class="form-label">Nombre</label>
                        <input id="txtProductName_{{ $product->id }}" value="{{ $product->name }}" class="form-control" type="text" placeholder="Nombre" aria-label="default input example">
                    </div>

                    <div class="mb-3">
                        <label for="txtProductDesc_{{ $product->id }}" class="form-label">Descripción</label>
                        <textarea id="txtProductDesc_{{ $product->id }}" value="{{ $product->description }}" class="form-control" type="text" placeholder="Descripción" 
                            aria-label="default input example">{{ $product->description }}</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="txtProductPrecio_{{ $product->id }}" class="form-label">Precio</label>
                        <input id="txtProductPrecio_{{ $product->id }}" value="{{ $product->price }}" class="form-control" type="number" placeholder="Precio" aria-label="default input example">
                    </div>

                    <div class="mb-3">
                        <select id="slcCategories_{{ $product->id }}" class="form-select" aria-label="Default select example">
                            <option></option>
                            @foreach ($categories as $row)
                                <option @if($row->id == $product->category_id) selected @endif
                                value={{$row->id}}
                                >{{$row->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary btn_guardar_cambios" data-product-id="{{ $product->id }}">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>