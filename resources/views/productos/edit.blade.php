@extends('layout.app')

@section('titulo')
Editar Producto
@endsection

@section('contenido')

<div class=" lg:w-full m-auto flex justify-center items-center gap-10">

    <div class="w-2/5 ">
        <img src="{{ asset('img/img-editar.jpg') }}" alt="" class="rounded-xl">
    </div>

    <div class="bg-white p-5 rounded-xl shadow-xl w-4/12">
        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Código Catálogo -->
            <div class="mb-4">
                <label for="codigo_catalogo" class="mb-2 block uppercase text-gray-500 font-bold">
                    Código Catálogo
                </label>
                <input
                    id="codigo_catalogo"
                    name="codigo_catalogo"
                    type="text"
                    placeholder="Introduce el codigo del producto"
                    value="{{ $producto->codigo_catalogo }}"
                    class="border p-2 w-full rounded-lg @error('codigo_catalogo') border-red-600 @enderror"
                />
            </div>
            @error('codigo_catalogo')
                <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                    {{ $message }}
                </p>
            @enderror

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre
                </label>
                <input
                    id="nombre"
                    name="nombre"
                    type="text"
                    placeholder="Introduce el nombre del producto"
                    value="{{ $producto->nombre }}"
                    class="border p-2 w-full rounded-lg @error('nombre') border-red-600 @enderror"
                />
            </div>
            @error('nombre')
                <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                    {{ $message }}
                </p>
            @enderror

            <!-- Precio -->
            <div class="mb-4">
                <label for="precio" class="mb-2 block uppercase text-gray-500 font-bold">
                    Precio
                </label>
                <input
                    id="precio"
                    name="precio"
                    type="number"
                    step="0.01"
                    min="0"
                    max="10000"
                    placeholder="Introduce el precio del producto"
                    value="{{ $producto->precio }}"
                    class="border p-2 w-full rounded-lg @error('precio') border-red-600 @enderror"
                />
            </div>
            @error('precio')
                <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                    {{ $message }}
                </p>
            @enderror

            <!-- Estado -->
            <div class="mb-4">
                <label for="estado" class="mb-2 block uppercase text-gray-500 font-bold">
                    Estado
                </label>
                <select
                    id="estado"
                    name="estado"
                    required
                    class="border p-2 w-full rounded-lg @error('estado') border-red-600 @enderror"
                >
                    <option value="Modificado" {{ $producto->estado == 'Modificado' ? 'selected' : '' }}>Modificado</option>
                    <option value="Nuevo Precio" {{ $producto->estado == 'Nuevo Precio' ? 'selected' : '' }}>Nuevo Precio</option>
                </select>
            </div>
            @error('estado')
                <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                    {{ $message }}
                </p>
            @enderror

            <!-- Botón de Guardar -->
            <input
                type="submit"
                value="Actualizar Producto"
                class="bg-sky-600 uppercase cursor-pointer font-bold w-full p-3 text-white rounded-lg mt-3 text-lg hover:bg-sky-700 transition-all duration-700"
            >
        </form>
    </div>
</div>

@endsection