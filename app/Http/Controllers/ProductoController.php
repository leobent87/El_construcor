<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\image;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

      $imagenes = image::all();

      $productos = producto::where('id_estado', 1)->latest('id')->paginate(12); 

      return view('productos.index', compact('productos','imagenes'));
    }

    public function show($producto){
      $detalle_producto = producto::find($producto);

      $productos_relacionados = producto::where('categoria_id', $detalle_producto->categoria_id)
                                        ->where('id_estado', 1)
                                        ->where('id','!=', $detalle_producto->id)
                                        ->latest('id')
                                        ->take(4)
                                        ->get();

      return  view('productos.show', compact('detalle_producto','productos_relacionados'));
    }

    public function categoria($id_categoria){
      $categoria = categoria::find($id_categoria);

      $productos_categoria = producto::where('categoria_id', $categoria->id)
                            ->where('id_estado', 1)
                            ->latest('id')
                            ->paginate(12);
                                                
      return view('productos.categoria', compact('productos_categoria', 'categoria'));
    }
}
