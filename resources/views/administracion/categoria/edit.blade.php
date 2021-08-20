@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1 class="ml-5">Editar Categoria</h1>
@stop

@section('content')

<form action="{{route('administracion.categoria.update', $datos_categoria)}}" method="POST" class="ml-5 needs-validation" novalidate>
   
    @csrf

    @method('put')

    <div class="col-md-10">
      <label for="validationCustom03" class="form-label">Nombre de la Categoria</label>
      <input type="text" name="nombre_categoria" class="form-control"  id="validationCustom03" value="{{$datos_categoria->nombre_categoria}}" required >
      <div class="invalid-feedback">
        Por favor, proporcione un nombre correcto.
      </div>
    </div>

    <div class="col-md-10 mt-3">
        <label for="validationCustom03" class="form-label">Descripcion de la Categoria</label>
        <textarea name="descripcion_categoria" class="form-control" id="validationCustom03" required>{{$datos_categoria->descripcion_categoria}}</textarea>
        <div class="invalid-feedback">
          Por favor, proporcione una descripcion correcta.
        </div>
    </div>

    <div class="col-md-6 mt-3">
        <label for="validationCustom03" class="form-label">Estado de la Categoria</label>
        <select name="id_estado" id="id_estado" class="form-control" value="{{old('id_estado')}}">
          <option value="{{$datos_categoria->id_estado}}">{{$datos_categoria->estado}}</option>
            @foreach ($estados as $estado)
            <option value="{{$estado->id}}"> {{$estado->nombre_estado}} </option>
            @endforeach               
        </select>  
       
    </div>
    <div class="col-12 mt-5">
        <button type="submit" class="btn btn-primary"> Actualizar Cagetoria </button>
    </div>
</form>

@stop

@section('js')
    <script>
      
    (function () {
        'use strict'
      
        var forms = document.querySelectorAll('.needs-validation')
      
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
      
              form.classList.add('was-validated')
            }, false)
          })
      })()

    </script>
@stop  
