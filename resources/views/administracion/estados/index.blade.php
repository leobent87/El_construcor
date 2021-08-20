@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Lista de de Estados </h1>
@stop

@section('content')

@if (session('Mensaje'))
    <div class="alert alert-success" role="alert">
        <strong>{{session('Mensaje')}}</strong>
    </div>   
@endif

<div class="card">
    <div class="card-header">
      <a href="{{route('administracion.estados.create')}}" class="btn btn btn-info ">Agregar un Nuevo Estado</a>
    </div>
    <div class="card-body">
        <table  class="table table-hover">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estados as $estado)
                 <tr>
                    <th>{{$estado->id}}</th>
                    <td class="h6">{{$estado->nombre_estado}}</td>
                    <td width="10px">
                        <a href="{{route('administracion.estados.edit',$estado)}}" class="btn btn-outline-secondary btn-sm">Editar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
       </table>  
    </div>
</div>

@stop

