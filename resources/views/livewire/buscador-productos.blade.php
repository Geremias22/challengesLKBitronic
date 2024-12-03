<div class="flex justify-center">
    <div class="m-8 lg:w-3/4 justify-center">
        <div class="mt-4">
            {{ $productos->links() }}
        </div>
        <br>
        {{$buscador}}
        <input
        type="text"
        placeholder="Busca los productos..."
        class="border-gray-900 rounded w-full p-2"
        {{-- wire:model.debounce.100ms="buscador" --}}
        wire:model.live="buscador"
        />

        

        <ul class="mt-4 " >
            @forelse ($productos as $producto)

                    <div class="rounded-3xl my-10 bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8  sm:p-10 lg:mx-0 ">
            
                        <p class="mt-4 ml-3 flex items-baseline gap-x-2">
                          <span class="text-5xl font-semibold tracking-tight text-gray-900">{{ $producto->nombre }}</span>
                        </p>
                        
                        <ul role="list" class="mt-8 space-y-3 text-sm/6 text-gray-600 sm:mt-10" style="list-style-type: disc; padding-left: 20px;">
                            
                          <li class="flex gap-x-3">
                            <svg class="h-6 w-6 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <circle cx="10" cy="10" r="5" />
                            </svg>
                            <span class="text-2xl text-gray-500"> Precio: {{ $producto->precio }}€</span>
                          </li>
                            
                          <li class="flex gap-x-3">
                            <svg class="h-6 w-6 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <circle cx="10" cy="10" r="5" />
                            </svg>
                            <span class="text-2xl text-gray-500"> Codigo catalogo: {{ $producto->codigo_catalogo }}</span>
                          </li>
                            
                          
                        </ul>
                        <a href="{{route('productos.show', $producto->id)}}" aria-describedby="tier-hobby" 
                            class="mt-8 block rounded-md px-3.5 py-2.5 text-center text-sm font-semibold text-indigo-600 bg-white ring-1 ring-inset ring-indigo-200 
                               hover:ring-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 
                               sm:mt-10 hover:bg-indigo-500 hover:text-white transition-colors duration-500 transform ">
                            Ver producto
                        </a>
                    </div>
                    
                
            @empty
                <li>No se encontraron productos.</li>
            @endforelse
        </ul>

        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
        
    
    
</div>