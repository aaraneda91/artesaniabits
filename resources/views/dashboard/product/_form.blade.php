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
    <x-adminlte-input name="name" label="Nombre"
        fgroup-class="col-md-6" disable-feedback/>

    <x-adminlte-input name="description" label="Descripcion"
        fgroup-class="col-md-6" disable-feedback/>

    <x-adminlte-input name="price" label="Precio"
        fgroup-class="col-md-6" disable-feedback/>
    
    <x-adminlte-input name="image" label="Imágen"
        fgroup-class="col-md-6" disable-feedback/>
        <x-adminlte-input-file-krajee name="kifBasic"/>
</div>