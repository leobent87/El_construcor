<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\cliente;
use App\Models\comentario;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    
    public function index()
    {
       
         $comentarios = comentario::all();
        
         return view('administracion.comentarios.index', compact('comentarios'));
    }

    public function show($id_comentario)
    {
        $comentario = comentario::find($id_comentario);

        //eturn $comentario->cliente;

        $cliente = cliente::where('id', $comentario->cliente_id)->first();

        return view('administracion.comentarios.show', compact('comentario', 'cliente'));
   
    }

}
