<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\Productos;

class BuscadorProductos extends Component
{

    public $buscador = "aaa";
    
    public function render()
    {
        //$productos = Productos::where('nombre', 'like', '%'. $this->buscador . '%')->paginate(10);
        $productos = Productos::all()->paginate(10);

        return view('livewire.buscador-productos', ['productos'=> $productos]);
    }
}
