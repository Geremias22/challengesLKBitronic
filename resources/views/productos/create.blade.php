@extends('layout.app')

@section('titulo')
Crear Producto
@endsection

@section('contenido')

<div class=" lg:w-full m-auto flex justify-center items-center gap-10">

    <div class="w-2/5 ">
        <img src="{{asset('img/img-create.jpg')}}" alt="" class="rounded-xl">
    </div>

    <div class="bg-white p-5 rounded-xl shadow-xl w-4/12">
        <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        

        <div class="mb-4">
            <label for="codigo_catalogo" class="mb-2 block uppercase text-gray-500 font-bold">
                Código Catálogo
            </label>
            <input 
            id="codigo_catalogo"
            name="codigo_catalogo"
            type="text"
            placeholder="Introduce el codigo del producto"
            class="border p-2 w-full rounded-lg @error('codigo_catalogo')
                border-red-600
            @enderror"
            value="{{ old('codigo_catalogo') }}"
            />
        </div>
        @error('codigo_catalogo')
            <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                {{ $message}}
            </p>
        @enderror



        <div class="mb-4">
            <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">
                Nombre
            </label>
            <input 
            id="nombre"
            name="nombre"
            type="text"
            placeholder="Introduce el nombre del producto"
            class="border p-2 w-full rounded-lg @error('nombre')
                border-red-600
            @enderror"
            value="{{ old('nombre') }}"
            />
        </div>
        @error('nombre')
            <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                {{ $message}}
            </p>
        @enderror



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
            class="border p-2 w-full rounded-lg @error('precio')
                border-red-600
            @enderror"
            value="{{ old('precio') }}"
            />
        </div>
        @error('precio')
            <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                {{ $message}}
            </p>
        @enderror


        <div class="mb-4">
            <label for="estado" class="mb-2 block uppercase text-gray-500 font-bold">
                Estado
            </label>
            <select 
                id="estado" 
                name="estado" 
                required
                class="border p-2 w-full rounded-lg @error('estado')
                    border-red-600
                @enderror"
            >
                <option value="Nuevo">Nuevo</option>
                <option value="Modificado">Modificado</option>
                <option value="Nuevo Precio">Nuevo Precio</option>
            </select>
            @error('estado')
                <p class="bg-red-600 text-white my-2 rounded-lg text-sm text-center p-2">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <input 
        type="submit" 
        value="Crear producto"
        class="bg-sky-600  uppercase cursor-pointer font-bold 
        w-full p-3 text-white rounded-lg mt-3 text-lg hover:bg-sky-700 transition-all duration-700"
        >
    </form>
    </div>
</div>
    

@endsection