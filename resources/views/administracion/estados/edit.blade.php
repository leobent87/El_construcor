@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1 class="ml-5">Editar Estado</h1>
@stop

@section('content')

<form action="{{route('administracion.estados.update', $datos_estado)}}" method="POST" class="ml-5 needs-validation" autocomplete="off"  novalidate>
   
  @csrf

  @method('put')

  <div class="col-md-10">
    <label for="validationCustom03" class="form-label">Nombre del Estado</label>
    <input type="text" name="nombre_estado" class="form-control"  id="validationCustom03" value="{{$datos_estado->nombre_estado}}" required >
    <div class="invalid-feedback">
      Por favor, proporcione un nombre correcto.
    </div>
  </div>

  <div class="col-12 mt-4">
      <button type="submit" class="btn btn-primary"> Actualizar Estado </button>
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
