<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function comentario(){
        return view('comentarios.opiniones');
    }

    public function enviarComentario(Request $request){
          
        $nuevoComentario = new comentario();

        $busquedaCliente = $request->correo;
        $cliente = cliente::where('correo', 'LIKE', '%'.$busquedaCliente.'%')->first();

         if ($cliente) {

            $nuevoComentario->descripcion_comentario = $request->descripcion_comentario;
            $nuevoComentario->cliente_id = $cliente->id;

            $nuevoComentario->getResource()->save();

            return redirect()->route('comentarios.opiniones', $cliente)->with('Mensaje','Tu comentario realizado con exito');
        }  
         else
        { 
        $request->validate([
         'nombre'=>'required',
         'apellido'=>'required',
         'correo'=>'required'
        ]);

        $cliente_creado = cliente::create($request->all());

        $nuevoComentario->descripcion_comentario = $request->descripcion_comentario;
        $nuevoComentario->cliente_id = $cliente_creado->id;

        $nuevoComentario->getResource()->save();

        //$cliente_creado->comentarios()->attach([$request->descripcion_comentario]);

        return redirect()->route('comentarios.opiniones', $cliente_creado)->with('Mensaje','Comentario realizado con exito');
       
       } 
    }
}
