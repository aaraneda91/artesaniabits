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
    <x-adminlte-input name="name" label="Nombre" value="{{ old('name', $category->name) }}"
        fgroup-class="col-md-6" disable-feedback/>
</div>