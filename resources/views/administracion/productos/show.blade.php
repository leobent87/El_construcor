@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Detalles de Producto</h1>
@stop

@section('content')
<div class="container py-8">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header h3">
                {{$producto_id->nombre_producto}}
            </div>
            <div class="card-body">
              <div>
                <img src="{{asset(Storage::url($producto_id->image->url))}}" class="img-thumbnail" alt="...">
              </div>
              <h5 class="card-title h4 mt-4">Marca: {{$producto_id->Marca}}</h5>
              <p class="card-text my-3">L. {{$producto_id->precio_venta}}</p>
              <p class="card-text mb-3">Codigo del Producto: {{$producto_id->id}}</p>
              <p class="card-text mb-3">Cantidad en Stock: {{$producto_id->existencia}} unidades</p>
              <p class="card-text mb-3">Categoria: {{$producto_id->categoria->nombre_categoria}}</p>
              <p class="card-text mb-3">Cantidad en Stock: {{$producto_id->existencia}} unidades</p>
              <p class="card-text mb-3">{{$producto_id->descripcion_producto}}</p>
              <div class="">
                <a href="{{route('administracion.productos.edit',$producto_id)}}" class="btn btn-outline-secondary">Editar</a>
                <a href="{{route('administracion.productos.index')}}" class="btn btn-outline-secondary ml-2">Regresar</a>      
              </div>
            </div>
        </div> 
      </div> 
    </div>     
</div>
@stop

