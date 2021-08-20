<x-app-layout>


  <div class="container py-8">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
            <div class="card-header h3">
                {{$detalle_producto->nombre_producto}}
            </div>
            <div class="card-body">
              <div>
                <img src="{{asset(Storage::url($detalle_producto->image->url))}}" class="img-thumbnail" alt="...">
              </div>
              <h5 class="card-title h4 mt-4">Marca: {{$detalle_producto->Marca}}</h5>
              <p class="card-text mb-3">L. {{$detalle_producto->precio_venta}}</p>
              <p class="card-text mb-3">Cantidad en Stock: {{$detalle_producto->existencia}} unidades</p>
              <p class="card-text mb-3">{{$detalle_producto->descripcion_producto}}</p>
            </div>
        </div> 
      </div>
      <div class="col-md-4">    
            <h1 class="h2">
              Más de {{$detalle_producto->categoria->nombre_categoria}}  
            </h1>   
            @foreach ($productos_relacionados as $producto_relacionado) 
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title h4">{{$producto_relacionado->nombre_producto}}</h5>
                      <p class="card-text mb-3">Marca: {{$producto_relacionado->Marca}}</p>
                      <p class="card-text mb-3">L. {{$producto_relacionado->precio_venta}}</p>
                      <a href="{{route('productos.show', $producto_relacionado)}}" class="btn btn-primary">Mostrar</a>
                    </div>
                </div>
            @endforeach
      </div>   
    </div>     
</div>

@include('livewire.footer')

</x-app-layout>
  

