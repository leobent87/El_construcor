<x-app-layout>

<div class="bg-white">
  <div class="max-w-2xl mx-auto py-5 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">LO MÁS BUSCADO</h2>

    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      @foreach ($productos as $producto)
       <div class="group relative border rounded">
        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
        <img src="{{asset(Storage::url($producto->image->url))}}" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
        </div>
        <div class="card-footer py-3 pl-2 flex justify-between">
        <div>
          <h3 class="text-sm text-gray-700">
            <a style="text-decoration: none" href="{{route('productos.show', $producto)}}">
              <span aria-hidden="true" class="absolute inset-0"></span>
              {{$producto->nombre_producto}}
            </a>
          </h3>
          <p class="text-sm font-medium text-gray-900">L. {{$producto->precio_venta}}</p>
          <p class="mt-1 text-sm text-gray-500">Marca: {{$producto->Marca}}</p>
        </div>
        </div>
       </div>
      @endforeach
    </div>

    <div class="mx-auto py-16">
      {{$productos->links()}}
    </div>

  </div>
</div>

@include('livewire.footer')

</x-app-layout>
