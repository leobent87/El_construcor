<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\estado;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    public $buscador = '';

    public function index(Request $request)
    {
        if($request){
            $resultado = $request->buscador;
            $productos = producto::where('nombre_producto', 'LIKE', '%'.$resultado.'%')
                                   ->latest('id')
                                   ->get();
            return view('administracion..productos.index', compact('productos'));
        }
        else {
             $productos = producto::latest('id')->get();
             return view('administracion..productos.index', compact('productos'));
        }
    }

    public function create()
    {
        $estados = estado::where('id','<','3')->get();
        $categorias = categoria::where('id_estado','1')->get();

        return view('administracion..productos.create', compact('estados', 'categorias'));
    }

    public function store(Request $request)
    {

          $request->validate([
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'precio_venta',
            'Marca'=>'required',
            'existencia'=>'required',
            'id_estado'=>'required',
            'categoria_id'=>'required',
          ]);
          
          $nuevo_producto = producto::create($request->all());

          if ($request->file('imagen_producto')) {
        
          $url_imagen =  Storage::put('public/imagenes_productos', $request->file('imagen_producto'));  
                
          $nuevo_producto->image()->create([
              'url' => $url_imagen
           ]);
           }

         return redirect()->route('administracion.productos.index', $nuevo_producto)->with('Mensaje','El producto se creo con exito');
        
    }

    public function show($id_producto)
    {
        $producto_id = producto::find($id_producto);

        return view('administracion.productos.show', compact('producto_id'));
    }

   
    public function edit($id_producto)
    {
        $producto_id = producto::find($id_producto);

        $estados = estado::where('id','<','3')->get();
        $categorias = categoria::where('id_estado','1')->get();

        return view('administracion.productos.edit', compact('estados', 'categorias', 'producto_id'));
    }

   
    public function update(Request $request, $id_producto)
    {
        $producto_id = producto::find($id_producto);

        $request->validate([
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'precio_venta',
            'Marca'=>'required',
            'existencia'=>'required',
            'id_estado'=>'required',
            'categoria_id'=>'required',
        ]);

        $producto_id->update($request->all());
        
        if ($request->file('imagen_producto')) {
        
            $url_imagen =  Storage::put('public/imagenes_productos', $request->file('imagen_producto'));  

            if($producto_id->image){
                Storage::delete($producto_id->image->url);

                $producto_id->image()->update([
                    'url' => $url_imagen]);
            }
        }

        return redirect()->route('administracion.productos.index', $producto_id)->with('Mensaje','El producto se ha actualizado con exito');
        

        
    }

}
