@extends('adminlte::page')


@section('title', 'Ferreteria el Constructor')

@section('content_header')
    <h1 class="ml-5">Crear Nuevo Producto</h1>
@stop

@section('content')

<form action="{{route('administracion.productos.store')}}" method="POST" class="ml-5 needs-validation" autocomplete="off" enctype="multipart/form-data" novalidate>
   
    @csrf

    <div class="col-md-10">
      <label for="validationCustom03" class="form-label">Nombre del Producto</label>
      <input type="text" name="nombre_producto" class="form-control"  id="validationCustom03" value="{{old('nombre_producto')}}" required >
      <div class="invalid-feedback">
        Por favor, proporcione un nombre correcto.
      </div>
    </div>

    <div class="col-md-10 mt-3">
        <label for="validationCustom03" class="form-label">Descripcion de la Categoria</label>
        <textarea name="descripcion_producto" class="form-control" id="validationCustom03" required>{{old('descripcion_producto')}}</textarea>
        <div class="invalid-feedback">
          Por favor, proporcione una descripcion correcta.
        </div>
    </div>

    <div class="col-md-10 mt-3">
      <label for="validationCustom03" class="form-label">Precio del Producto</label>
      <input type="text" name="precio_venta" class="form-control"  id="validationCustom03" value="{{old('precio_venta')}}" required >
      <div class="invalid-feedback">
        Por favor, proporcione un monto correcto.
      </div>
    </div>

    <div class="col-md-10 mt-3">
      <label for="validationCustom03" class="form-label">Marca del Producto</label>
      <input type="text" name="Marca" class="form-control"  id="validationCustom03" value="{{old('Marca')}}" required >
      <div class="invalid-feedback">
        Por favor, proporcione un nombre correcto.
      </div>
    </div>

    <div class="col-md-10 mt-3">
      <label for="validationCustom03" class="form-label">Cantidad en Inventario</label>
      <input type="text" name="existencia" class="form-control"  id="validationCustom03" value="{{old('existencia')}}" required >
      <div class="invalid-feedback">
        Por favor, proporcione una cantidad correcta.
      </div>
    </div>
    
    <div class="row my-4 col-md-10">
      <div class="col">
          <div class="image-wrapper" style="width:15rem;">
              <img id="imagen_muestra" class="card-img-top" src="https://images.unsplash.com/photo-1614942827452-79da2c219944?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80" alt="">
          </div>
      </div>
      <div class="col">
          <div class="form-group">
              <label onclick="" class="h5" for="imagen_producto">Seleccionar imagen</label>
              <input type="file" name="imagen_producto" id="imagen_producto" class="form-control-file" accept="image/*">
          </div>
          <p class="h6">Seleccione una imagen ilustrativa al producto nuevo, que se esta ingresando que no sea mayor a los 2mb.</p>
      </div>
    </div>

    <div class="col-md-6 mt-3">
        <label for="validationCustom03" class="form-label">Estado del Producto</label>
        <select name="id_estado" id="id_estado" class="form-control" value="{{old('id_estado')}}">
            @foreach ($estados as $estado)
            <option value="{{$estado->id}}"> {{$estado->nombre_estado}} </option>
            @endforeach               
        </select>  
    </div>

    <div class="col-md-6 mt-3">
      <label for="validationCustom03" class="form-label">Categoria del Producto</label>
      <select name="categoria_id" id="categoria_id" class="form-control" value="{{old('categoria_id')}}">
          @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}"> {{$categoria->nombre_categoria}} </option>
          @endforeach               
      </select>  
    </div>

    <div class="col-12 py-4">
        <button type="submit" class="btn btn-primary"> Agregar Producto </button>
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

      document.getElementById("imagen_producto").addEventListener('change', cambiarImagen);

      function cambiarImagen(event){ 
          var file = event.target.files[0];
          var reader = new FileReader();
          reader.onload = (event) => {
              document.getElementById("imagen_muestra").setAttribute('src', event.target.result); 
        };
          reader.readAsDataURL(file);
        }
  </script>
@stop  
