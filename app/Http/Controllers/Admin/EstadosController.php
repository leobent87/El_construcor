<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    
    public function index()
    {
        $estados = estado::all();

        return  view('administracion.estados.index', compact('estados'));
    }

   
    public function create()
    {
        return view('administracion.estados.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre_estado'=>'required',
            
          ]);
  
          $nueva_nuevo = estado::create($request->all());
  
          return redirect()->route('administracion.estados.index', $nueva_nuevo)->with('Mensaje','El estado se creo con exito');
     
    }

    public function edit($estado_id)
    {
        $datos_estado = estado::find($estado_id);

        return view('administracion.estados.edit', compact('datos_estado'));
    }

    public function update(Request $request, $estado_id)
    {
        $estado_id = estado::find($estado_id);

        $request->validate([
            'nombre_estado'=>'required',
        ]);

        $estado_id->update($request->all());

        return redirect()->route('administracion.estados.index', $estado_id)->with('Mensaje','El estado se actualizo con exito');
    }

}
