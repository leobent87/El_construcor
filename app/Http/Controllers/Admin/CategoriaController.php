<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\categoria;
use App\Models\estado;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $listado_categoria = categoria::all();

        return view('administracion.categoria.index', compact('listado_categoria'));
    }

    public function create()
    {
       $estados = estado::where('id','<','3')->get();

       return view('administracion.categoria.create', compact('estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
          'nombre_categoria'=>'required',
          'descripcion_categoria'=>'required'
        ]);

        $nueva_categoria = categoria::create($request->all());

        return redirect()->route('administracion.categoria.index', $nueva_categoria)->with('Mensaje','La categoria se creo con exito');
    }
    
    public function edit($categoria_id)
    {
        $datos_categoria = categoria::find($categoria_id);
        $estados = estado::where('id','<','3')->get();

        return view('administracion.categoria.edit', compact('datos_categoria', 'estados'));
    }

    
    public function update(Request $request, $categoria_id)
    {
        $id_categoria = categoria::find($categoria_id);

        $request->validate([
            'nombre_categoria'=>'required',
            'descripcion_categoria'=>'required'
        ]);

        $id_categoria->update($request->all());

        return redirect()->route('administracion.categoria.index', $id_categoria)->with('Mensaje','La categoria se actualizo con exito');
    }
}
