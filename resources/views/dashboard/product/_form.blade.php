@csrf
@section('plugins.KrajeeFileinput', true)
@php
$config = [
    'allowedFileTypes' => ['text', 'office', 'pdf'],
    'browseOnZoneClick' => true,
    'theme' => 'explorer-fa5',
];
@endphp
<div class="row">
    <x-adminlte-input name="name" label="Nombre" value="{{ old('name', $product->name) }}"
        fgroup-class="col-md-6" disable-feedback/>

    <x-adminlte-input name="description" label="Descripcion" value="{{ old('description', $product->description) }}"
        fgroup-class="col-md-6" disable-feedback/>

    <div class="form-group col-md-6">
    <label for="categoria_id">Categoria</label>
    <select name="category_id" id="categoria_id" class="form-control">
        <option value=""></option>
        @foreach ($categories as $name => $id)
            <option {{ old("category_id", $product->category_id) == $id ? "selected" : "" }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select></div>

    <x-adminlte-input name="price" label="Precio" value="{{ old('price', $product->price) }}"
        fgroup-class="col-md-6" disable-feedback/>
    
        <x-adminlte-input-file-krajee name="image" value="{{ old('image', $product->image) }}"/>
    @if (isset($task) && $task == 'edit')
    <div class="col-md-6">
        <img src="{{  url('image').'/'.$product->image }}" alt="" height="200" width="200">
    </div>
    @endif
</div>