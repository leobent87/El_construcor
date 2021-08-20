<?php

namespace App\Http\Livewire;
use App\Models\categoria;

use Livewire\Component;

class Menu extends Component
{
    public function render()
    {
        $categorias  = categoria::where('id_estado', 1)->get();
        return view('livewire.menu', compact('categorias'));
    }
}
