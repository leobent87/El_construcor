<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdministracionController extends Controller
{
    public function inicio(){

        return view('administracion.inicio');
        
    }
}

   
