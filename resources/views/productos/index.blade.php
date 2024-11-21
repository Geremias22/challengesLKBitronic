@extends('layout.app')

@section('titulo')
Productos
@endsection

@section('contenido')
<div class=" md:w-full flex justify-center">
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
                <th class="border border-gray-300 px-4 py-2">Actualizar</th>
                <th class="border border-gray-300 px-4 py-2">Eliminar</th>
            </tr>
        </thead>
        {{-- <tbody>
            @foreach($productos as $producto)
            <tr class="hover:bg-gray-50">
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
                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700">
                        Actualizar
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
            </tr>
            @endforeach
        </tbody> --}}
        



        <tbody>
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
        </tbody>
    </table>
</div>
   

@endsection