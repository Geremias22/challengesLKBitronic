<div>
    
    <input
    type="text"
    placeholder="Busca los productos..."
    class=""
    wire:model.debounce.500ms="buscador"
    />

    <ul class="mt-4">
        @foreach ( $productos as $producto )
            <li>
                <span>{{$producto->nombre}}</span> - <span>{{$producto->precio}}</span>
            </li>
        @endforeach
    </ul>

    {{ $productos->links() }}

</div>
