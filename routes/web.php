<?php

use App\Http\Controllers\Admin\AdministracionController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

Route::get('producto/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('categoria/{id_categoria}', [ProductoController::class, 'categoria'])->name('productos.categorias');

Route::get('comentarios', [ComentarioController::class, 'comentario'])->name('comentarios.opiniones');

Route::post('comentarios/Enviar_Comentario',[ComentarioController::class, 'enviarComentario'])->name('comentarios.enviarComentario');

Route::get('administracion', [AdministracionController::class, 'inicio'])->name('administracion.inicio');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
