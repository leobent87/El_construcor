<x-app-layout>
    <div class="card text-center mx-5 my-5">
        <div class="card-header h2">
          ADMINISTRACION Y CONTROL
        </div>
        <div class="card-body">
          <img class="h-20 rounded mx-auto d-block" src="{{asset('images/ferreteria-logo.png')}}">
          <h5 class="card-title pt-3 h3">Opciones del usuario</h5>
            <div class="d-grid gap-2">
                <a href="{{route('administracion.categoria.index')}}" class="btn btn-outline-info btn-block mt-5">Ingresar</a> 
                <br>
                <a href="{{route('register')}}" class="btn btn-outline-info btn-block">Registrarse</a>
                <br>
                <a href="{{asset('/')}}" class="btn btn-outline-info btn-block">Ir a la Pagina Principal</a>  
            </div>
        </div> 
    </div>
</x-app-layout>