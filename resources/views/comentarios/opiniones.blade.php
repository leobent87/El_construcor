<x-app-layout>

    <div class="card mx-5 my-5">
        <div class="card-header">
         <h1 class="h1 text-center">Dejanos tus Comentarios</h1>
        </div>
        <div class="card-body">
            @if (session('Mensaje'))
            <div class="alert alert-success ml-5 mt-5 col-md-11" role="alert">
                <strong>{{session('Mensaje')}}</strong>
            </div>   
            @endif

            <form action="{{route('comentarios.enviarComentario')}}" method="POST" class="ml-5 mt-5 needs-validation" autocomplete="off"  novalidate>
        
                @csrf

                <div class="input-group mb-4 col-md-11">
                    <span class="form-label input-group-text" or="validationCustom03">Nombre y Apellido</span>
                    <input type="text" name="nombre" class="form-control border" placeholder="Nombre" id="validationCustom03" value="{{old('nombre')}}" required>
                    <input type="text" name="apellido" class="form-control border" placeholder="Apellido" id="validationCustom03" value="{{old('apellido')}}" required>
                    <div class="invalid-feedback">
                        Por favor, proporcione un nombre y un apellido correcto.
                    </div>
                </div>

                <div class="input-group mb-4 col-md-11">
                    <input type="text" name="correo" class="form-control border" placeholder="email@example.com" id="validationCustom03" value="{{old('correo')}}" required>
                    <span class="input-group-text" id="basic-addon2">Correo Electronico</span>
                    <div class="invalid-feedback">
                        Por favor, proporcione un correo electronico correcto.
                    </div>
                </div>

                <div class="input-group col-md-11">
                    <span class="input-group-text">Comentario</span>
                    <textarea name="descripcion_comentario" class="form-control" id="validationCustom03" required>{{old('descripcion_comentario')}}</textarea>
                    <div class="invalid-feedback">
                        Por favor, proporcione una descripcion del comentario correcto.
                    </div>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-outline-primary"> Enviar Comentario </button>
                </div>
            </form>
        </div>
    </div>

    @include('livewire.footer')

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

</x-app-layout>
