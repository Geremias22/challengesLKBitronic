@extends('layout.app')

@section('titulo')
Productos
@endsection

@section('contenido')
 

<div class="flex justify-center">

  <div class=" w-3/4 rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 sm:mx-8  sm:p-10 lg:mx-0  ">

    <div class="flex justify-center items-center gap-36">
      <div>
        <h3 id="tier-hobby" class="text-base/7 font-semibold text-indigo-600">Producto</h3>
        <p class="mt-4 flex items-baseline gap-x-2">
          <span class="text-4xl font-semibold tracking-tight text-gray-900"> <span class="font-bold">Nombre:</span>  {{$producto->nombre}}</span>
        </p>
        <br>
        <p>
          <span class=" text-gray-500 text-3xl"><span class="font-bold">Precio: </span> {{$producto->precio}}€</span>
        </p>
      </div>

      <div >
        <ul role="list" class="mt-8 space-y-3 text-xl text-gray-600 sm:mt-10 ">
          <li class="flex gap-x-3">
            <svg class="h-4 w-4 flex-none text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 1 1 0-2h10.586l-4.293-4.293a1 1 0 0 1 0-1.414Z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold">ID:</span> {{$producto->id}}
          </li>
          <li class="flex gap-x-3">
            <svg class="h-4 w-4 flex-none text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 1 1 0-2h10.586l-4.293-4.293a1 1 0 0 1 0-1.414Z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Codigo:</span> {{$producto->codigo_catalogo}}
          </li>
          <li class="flex gap-x-3">
            <svg class="h-4 w-4 flex-none text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 1 1 0-2h10.586l-4.293-4.293a1 1 0 0 1 0-1.414Z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Estado:</span> {{$producto->estado}}
          </li>
          <li class="flex gap-x-3">
            <svg class="h-4 w-4 flex-none text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 1 1 0-2h10.586l-4.293-4.293a1 1 0 0 1 0-1.414Z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Creado:</span> {{$producto->created_at}}
          </li>
          <li class="flex gap-x-3">
            <svg class="h-4 w-4 flex-none text-gray-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 0 1-1.414-1.414L14.586 11H4a1 1 0 1 1 0-2h10.586l-4.293-4.293a1 1 0 0 1 0-1.414Z" clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Actualizado:</span> {{$producto->updated_at}}
          </li>
        </ul>
      </div>
    </div>
    

    
    <div class="flex justify-center gap-20 items-end text-xl">
      <a href="{{route('home')}}"  
        class=" h-12 w-40 text-center   block rounded-md px-3 py-2 font-semibold text-indigo-600 ring-1 ring-inset ring-indigo-200
         hover:ring-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:mt-10 hover:bg-indigo-500 hover:text-white transition-colors duration-500 transform">
         
         volver
      </a>
      
      <a href="{{ route('productos.edit', $producto['id']) }}" 
        class=" h-12 w-40 text-center   block rounded-md px-3 py-2 font-semibold text-yellow-400 ring-1 ring-inset ring-yellow-300
         hover:ring-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-400 sm:mt-10 hover:bg-yellow-400 hover:text-white transition-colors duration-500 transform">
         
        
        
        Editar
      </a>

      

      <form action="{{ route('productos.destroy', $producto['id']) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
            @csrf
            @method('DELETE')
            <button type="submit" 
            class=" h-12 w-40 text-center   block rounded-md px-3 py-2 font-semibold text-red-500 ring-1 ring-inset ring-red-500
            hover:ring-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 sm:mt-10 hover:bg-red-500 hover:text-white transition-colors duration-500 transform">
            
                Eliminar
            </button>
        </form>

        <a href="{{ route('actualizarPrecio', $producto['id']) }}" 
            class="h-12 w-48 text-center block rounded-md px-3 py-2 font-semibold text-teal-500 ring-1 ring-inset ring-teal-300
          hover:ring-teal-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-500 sm:mt-10 hover:bg-teal-500 hover:text-white transition-colors duration-500 transform">
            Actualizar Precio
        </a>

    </div>
    
    
  </div>

</div>



{{-- <div class=" md:w-full flex justify-center">

    
    <table class="table-auto border-collapse border border-gray-300 rounded-lg shadow-lg w-11/12 text-left">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Código Catálogo</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Precio</th>
                <th class="border border-gray-300 px-4 py-2">Estado</th>
                <th class="border border-gray-300 px-4 py-2">Fecha Creación</th>
                <th class="border border-gray-300 px-4 py-2">Fecha Modificación</th>
                <th class="border border-gray-300 px-4 py-2">Editar</th>
                <th class="border border-gray-300 px-4 py-2">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            {{-- <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $producto->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->codigo_catalogo }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->nombre }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->precio }}€</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->estado }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->created_at }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->updated_at }}</td>
                
                <!-- Botón Actualizar -->
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('productos.edit', $producto->id) }}" 
                    class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                        Editar
                    </a>
                </td>


                <td class="border border-gray-300 px-4 py-2">
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                            Eliminar
                        </button>
                    </form>
                </td>

                

                <!-- <td class="border border-gray-300 px-4 py-2">
                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">Eliminar</button>
                </td> -->
            </tr> --}}

            {{-- <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $producto->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->codigo_catalogo }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->nombre }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->precio }}€</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->estado }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->created_at }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto->updated_at }}</td>
                
                
            </tr>
            @endforeach
        </tbody> --}}
        



        {{-- <tbody>
            @foreach($productos as $producto)
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ $producto['id'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['codigo_catalogo'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['nombre'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['precio'] }}€</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['estado'] }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['created_at'] ?? 'N/A' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $producto['updated_at'] ?? 'N/A' }}</td>
        
                <!-- Botón Actualizar -->
                <td class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('productos.edit', $producto['id']) }}" 
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700">
                        Actualizar
                    </a>
                </td>
        
                <!-- Botón Eliminar -->
                <td class="border border-gray-300 px-4 py-2">
                    <form action="{{ route('productos.destroy', $producto['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-700">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody> --}}
    {{-- </table>
</div> --}}

   

@endsection