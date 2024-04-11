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

    <x-adminlte-input name="description" label="Descripcion" value="{{ old('name', $product->description) }}"
        fgroup-class="col-md-6" disable-feedback/>

    <x-adminlte-input name="price" label="Precio" value="{{ old('name', $product->price) }}"
        fgroup-class="col-md-6" disable-feedback/>
    
    <x-adminlte-input name="image" label="Imágen" value="{{ old('name', $product->image) }}"
        fgroup-class="col-md-6" disable-feedback/>
        <x-adminlte-input-file-krajee name="kifBasic"/>
</div>