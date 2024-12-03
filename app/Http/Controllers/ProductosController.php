<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class ProductosController extends Controller
{


    // public function index()
    // {
    
    //     try {
    //         // Intenta conectar con la API
    //         $response = Http::get('http://34.0.216.172/api/v1/products');

    //         if ($response->successful()) {
    //             $productos = $response->json();
    //         } else {
    //             throw new \Exception('Error al obtener datos de la API');
    //         }
    //     } catch (\Exception $e) {
    //         // Si ocurre un error, carga datos simulados desde el archivo JSON
    //         $productos = json_decode(Storage::get('data/productos.json'), true);
    //         session()->flash('warning', 'Mostrando datos simulados. No se pudo conectar con la API.');
    //     }

    //     return view('productos.index', compact('productos'));
    // }

    // public function store(Request $request)
    // {
    //     $response = Http::post('http://34.0.216.172/api/v1/products', $request->all());

    //     if ($response->successful()) {

    //         // Validación
    //         $this->validate($request,[
    //             'codigo_catalogo' => ['required', 'string', 'max:50', 'unique:productos'],
    //             'nombre' => ['required', 'string', 'max:100'],
    //             'precio' => ['required', 'numeric', 'min:0', 'max:10000'],
    //             'estado' => ['required', 'in:Nuevo,Modificado,Nuevo Precio'],
    //         ]);

    //         return redirect()->route('productos.index')->with('success', 'Producto creado con éxito.');
    //     } else {
    //         return back()->withErrors('Error al crear el producto.')->withInput();
    //     }
    // }

    // public function edit($id)
    // {
    //     $response = Http::get("http://34.0.216.172/api/v1/products/{$id}");

    //     if ($response->successful()) {
    //         $producto = $response->json();
    //         return view('productos.edit', compact('producto'));
    //     } else {
    //         abort(404, 'Producto no encontrado en la API.');
    //     }
    // }

    // public function update(Request $request, $id)
    // {
    //     $response = Http::put("http://34.0.216.172/api/v1/products/{$id}", $request->all());

        

    //     if ($response->successful()) {

    //         $request->validate([
    //             'nombre' => 'required|string|max:255',
    //             'precio' => 'required|numeric|min:0',
    //             'estado' => 'required|in:Nuevo,Modificado,Nuevo Precio',
    //         ]);

    //         return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    //     } else {
    //         return back()->withErrors('Error al actualizar el producto.');
    //     }
    // }


    // public function destroy($id)
    // {
    //     $response = Http::delete("http://34.0.216.172/api/v1/products/{$id}");

    //     if ($response->successful()) {
    //         return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito.');
    //     } else {
    //         return redirect()->route('productos.index')->with('error', 'No se pudo eliminar el producto.');
    //     }
    // }

    // /**
    //  *
    //  * Display a listing of the resource.
    //  * * * * * * *
    //  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
    //  *   EN CASO DE QUE NO FUNCIONE LA CONEXION DE LA API YA QUE NO LO TENIA HABILITADO PARA HACER 
    //  *   LAS SUFICIENTES PRUEBAS SE PUEDE HANILITAR ESTA PARTE DE ABAJO QUE ESTA CONFIGURADO Y PROBADO,
    //  *   TAMBIEN ESTA HABILITADO LAS FACTORIES Y SEEDERS PARA CREAR PRODUCTOS RANDOMS Y PROBAR LAS FUNCIONALIDADES
    //  *
    //  * * *  SI NO FUNCIONA CONEXION DE API TAMBIEN HAY QUE CAMBIAR EL <tbody> COMENTADO POR EL QUE ESTA
    //  *
    //  * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
    //  * * * * * * *
    //  */
    public function index()
    {
        $productos = Productos::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('codigo_catalogo'));

         // Validación
        $this->validate($request,[
        'codigo_catalogo' => ['required', 'string', 'max:50', 'unique:productos'],
        'nombre' => ['required', 'string', 'max:100'],
        'precio' => ['required', 'numeric', 'min:0', 'max:10000'],
        'estado' => ['required', 'in:Nuevo,Modificado,Nuevo Precio'],
    ]);

    //Guardar en la base de datos

    Productos::create([
        'codigo_catalogo' => $request->codigo_catalogo,
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'estado' => $request->estado,
    ]);

    
    // Redireccionar 
    return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Productos::findOrFail($id);
    return view('productos.show', compact('producto'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto)
    {
        return view('productos.edit', compact('producto'));
    }
    
    public function update(Request $request, Productos $producto)
    {
        $request->validate([
            'codigo_catalogo' => 'required|string|max:10',
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'estado' => 'required|in:Nuevo,Modificado,Nuevo Precio',
        ]);
    
        $producto->update($request->all());
    
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }
    
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }


    public function actualizarPrecio($id)
    {
        
        $producto = Productos::findOrFail($id);

        // Hacer una solicitud a la API REST para obtener el precio actualizado del producto
        $response = Http::get("http://34.0.216.172/api/v1/products/{$producto->codigo_catalogo}");

        if ($response->successful()) {
            $data = $response->json();
            $nuevoPrecio = $data['precio'];

            // Si el precio ha cambiado, actualizar el producto
            if ($producto->precio != $nuevoPrecio) {
                $producto->update([
                    'precio' => $nuevoPrecio,
                    'estado' => 'Nuevo Precio',
                    'updated_at' => now(), 
                ]);

                return redirect()->route('productos.show', $producto->id)->with('success', 'Precio actualizado con éxito.');
            } else {
                return redirect()->route('productos.show', $producto->id)->with('info', 'El precio no ha cambiado.');
            }
        } else {
            return redirect()->route('productos.show', $producto->id)->with('error', 'Error al consultar el precio del producto.');
        }
    }


    public function actualizarPreciosMasivos()
    {
        // Hacer una solicitud a la API REST para obtener los productos que han cambiado de precio
        $response = Http::get("http://34.0.216.172/api/v1/products/lastupdated");

        if ($response->successful()) {
            $productosActualizados = $response->json();

            foreach ($productosActualizados as $productoActualizado) {
                $producto = Productos::where('codigo_catalogo', $productoActualizado['codigo_catalogo'])->first();

                if ($producto && $producto->precio != $productoActualizado['precio']) {
                    // Si el precio ha cambiado, actualizar el producto
                    $producto->update([
                        'precio' => $productoActualizado['precio'],
                        'estado' => 'Nuevo Precio',
                        'updated_at' => now(), 
                    ]);
                }
            }

            return redirect()->route('productos.index')->with('success', 'Precios actualizados masivamente con éxito.');
        } else {
            return redirect()->route('productos.index')->with('error', 'Error al consultar los precios actualizados.');
        }
    }

}
