@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Lista de Categorias </h1>
@stop

@section('content')

@if (session('Mensaje'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('Mensaje')}}</strong>
    </div>   
@endif

<div class="card">
    <div class="card-header">
      <a href="{{route('administracion.categoria.create')}}" class="btn btn btn-info ">Agregar Categoria</a>
    </div>
    <div class="card-body">
        <table  class="table table-hover">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listado_categoria as $categorias)
                 <tr>
                    <th>{{$categorias->id}}</th>
                    <td class="h6">{{$categorias->nombre_categoria}}</td>
                    <td class="h6">{{$categorias->descripcion_categoria}}</td>
                    <td width="10px">
                        <a href="{{route('administracion.categoria.edit',$categorias)}}" class="btn btn-outline-secondary btn-sm">Editar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
       </table>  
    </div>
</div>

@stop

