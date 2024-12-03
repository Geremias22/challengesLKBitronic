<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Productos;
use Livewire\WithPagination; // Añadir esta línea para habilitar la paginación

class BuscadorProductos extends Component
{
    use WithPagination; // Habilitar paginación en el componente

    public $buscador = ""; // Inicializamos la búsqueda como cadena vacía

    protected $queryString = ['buscador']; // Preservar la búsqueda en la URL

    // public function updatingBuscador()
    // {
    //     $this->resetPage(); // Reiniciar la paginación al realizar una búsqueda
    // }

    public function render()
    {
        $productos = Productos::where('nombre', 'ilike', '%' . $this->buscador . '%')
            ->paginate(10);

        // $productos = Productos::whereRaw("to_tsvector('spanish', nombre) @@ plainto_tsquery(?)", [$this->buscador])
        // ->paginate(10);

        return view('livewire.buscador-productos', ['productos' => $productos]);
    }
}