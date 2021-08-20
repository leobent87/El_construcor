<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ComentariosController;
use App\Http\Controllers\Admin\EstadosController;
use App\Http\Controllers\Admin\ProductosController;
use Illuminate\Support\Facades\Route;


Route::resource('categoria', CategoriaController::class)->names('administracion.categoria');

Route::resource('productos', ProductosController::class)->names('administracion.productos');

Route::resource('comentarios', ComentariosController::class)->names('administracion.comentarios');

Route::resource('estados', EstadosController::class)->names('administracion.estados');