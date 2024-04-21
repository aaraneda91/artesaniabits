@extends('home')
@section('contenido')
<div class="row">
  <div class="small-box bg-gradient-success col-md-3">
    <div class="inner">
      <h3>{{$products}}</h3>
      <p>Productos</p>
    </div>
    <div class="icon">
      <i class="fas fa-shopping-cart"></i>
    </div>
    <a href="{{route('product.index')}}" class="small-box-footer">
      Ir a Productos <i class="fas fa-arrow-circle-right"></i>
    </a>
  </div>
</div>
@endsection