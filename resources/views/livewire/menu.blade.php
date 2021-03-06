<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800" x-data= "{open:false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">

        <!-- Menu responsive movil-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
           
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
         
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

         {{--Barra menu--}}
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
            {{--Logotipo--}}
            <a href="{{asset('/')}}" class="flex-shrink-0 flex items-center">
              <img class="h-8" src="{{asset('images/ferreteria-logo.png')}}" alt="Workflow">
            </a>
          {{-- Opciones Menu --}}
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a> --}}
              @foreach ($categorias as $categoria)
              <a style="text-decoration: none" href="{{route('productos.categorias', $categoria)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{$categoria->nombre_categoria}}</a>  
              @endforeach
            </div>
          </div>
        </div>

        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
         <a href="{{route('comentarios.opiniones')}}"><i style="color: white" class="far fa-comments mr-4"></i></a> 
        </div>
      </div>
    </div>
  
    {{--Menu Movil--}}
    <div x-show="open" x-on:click.away="open = false" class="sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
       {{--  <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a> --}}
        @foreach ($categorias as $categoria)
        <a style="text-decoration: none" href="{{route('productos.categorias', $categoria)}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{$categoria->nombre_categoria}}</a> 
        @endforeach
      </div>
    </div>
</nav>

</div>
  