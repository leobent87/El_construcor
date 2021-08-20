@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1>Comentario del cliente: {{$cliente->nombre}} {{$cliente->apellido}}</h1>
@stop

@section('content')

<div class="container py-8">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
            <div class="card-body">
              <p class="card-text my-3">Fecha: {{$comentario->created_at}}</p>
              <p class="card-text my-3">Descripcion del comentario: {{$comentario->descripcion_comentario}}</p>
              <p class="card-text mb-3">Correo del cliente: {{$cliente->correo}}</p>
              <div class="">
                <a href="" class="btn btn-outline-secondary">Responder</a>  
                <a href="{{route('administracion.comentarios.index')}}" class="btn btn-outline-secondary ml-2">Regresar</a>   
              </div>
            </div>
        </div> 
      </div> 
    </div>     
</div>
    
@stop
