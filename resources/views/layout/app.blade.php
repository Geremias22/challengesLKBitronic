<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{asset('img/icono - copia.jpg')}}">
        <title>ChallengesLKBitronic - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>

     <body class="bg-gray-100">
        
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                
                <h1 class="text-5xl font-black"><a href="{{route('home')}}">
                        
                    <span class="group hover:text-blue-900 transition-colors duration-300">
                        <span class="group-hover:text-black transition-colors duration-300">Challengess</span><span class="group-hover:text-blue-900 transition-colors duration-300">L</span><span class="group-hover:text-yellow-400 transition-colors duration-300">K</span><span class="group-hover:text-black transition-colors duration-300">Bitronic</span>
                    </span>
    
                </h1>
                
                <nav class="flex gap-5 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm hover:text-blue-800 transition-all duration-300" href="{{route('productos.create')}}">Crear productos</a>
                    <a class="font-bold uppercase text-gray-600 text-sm hover:text-blue-800 transition-all duration-300" href="{{ route('actualizarPreciosMasivos') }}">Actualizar Precios </a>
                    
                </nav>
                
            </div>    
        </header> 

        <div class="flex flex-col min-h-screen">
            <main class="container mx-auto mt-10 flex-grow " >
                <h2 class="font-semibold text-center text-5xl mb-10">
                    @yield('titulo')
                </h2>
                @yield('contenido')

            </main>

            <footer class="text-center p-5 text-gray-500 font-bold uppercase mt-10">
                ChallengesLKBitronic - Todos los derechos reservados 
                {{now()->year}} 

            </footer>
        </div>
    </body>
</html>
