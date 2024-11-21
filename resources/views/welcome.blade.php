@extends('layout.app')

@section('titulo')
    Ver tabla de productos
@endsection

@section('contenido')

<div class="m-auto flex justify-center items-center lg:w-1/6 hover:lg:w-1/5 transition-all duration-300">

    <a href="{{ route('productos.index') }}" class="block">
        <div class="p-5 bg-white pb-2 rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 hover:border hover:border-gray-300 transition-all duration-300">
            <img src="{{ asset('img/img-productos.jpg') }}" alt="Imagen de productos" class="rounded-xl">
            <p class="text-center pt-2 text-gray-700 font-semibold">Tabla de productos</p>
        </div>
    </a>
</div>

@endsection