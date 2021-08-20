@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Lista de Productos </h1>
@stop

@section('content')


<form class="input-group mb-3">
    <input name="buscador" type="text" class="form-control" placeholder="Buscar un Producto" >
    <button class="btn btn-outline-info" type="submit"><i class="fas fa-search"></i>  Buscar</button>
</form>


@if (session('Mensaje'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('Mensaje')}}</strong>
    </div>   
@endif

<div class="card">
    <div class="card-body">
        <table  class="table table-hover">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Marca</th>
                  <th>Existencia</th>
                  <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                 <tr>
                    <th>{{$producto->id}}</th>
                    <td class="h6">{{$producto->nombre_producto}}</td>
                    <td class="h6">{{$producto->precio_venta}}</td>
                    <td class="h6">{{$producto->Marca}}</td>
                    <td class="h6">{{$producto->existencia}}</td>
                    <td width="1px">
                        <a href="{{route('administracion.productos.edit',$producto)}}" class="btn btn-outline-secondary btn-sm">Editar</a>
                    </td>
                    <td width="1px">
                        <a href="{{route('administracion.productos.show',$producto)}}" class="btn btn-outline-info btn-sm">Revisar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
       </table>  
    </div>
</div>
@stop

