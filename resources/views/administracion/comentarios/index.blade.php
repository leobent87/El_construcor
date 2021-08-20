@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Lista de Comentarios</h1>
@stop

@section('content')



<div class="card">
    <div class="card-body">
        <table  class="table table-hover">
            <thead>
                <tr>
                  <th>Codigo del Cliente</th>
                  <th>Descripcion del Comentario</th>
                  <th>Fecha</th>
                  <th colspan="1"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comentarios as $comentario)
                 <tr>
                    <th>{{$comentario->cliente_id}}</th>
                    <td class="h6">{{$comentario->descripcion_comentario}}</td>
                    <td class="h6">{{$comentario->created_at}}</td> 
                    <td width="10px">
                        <a href="{{route('administracion.comentarios.show',$comentario)}}" class="btn btn-outline-secondary btn-sm">Revisar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
       </table>  
    </div>
</div>

@stop

