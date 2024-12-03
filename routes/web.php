<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('productos.index');
})->name('home');

Route::get('/productos/{id}/actualizar-precio', 
[ProductosController::class, 'actualizarPrecio'])->name('actualizarPrecio');

Route::get('/productos/actualizar-precios-masivos', 
[ProductosController::class, 'actualizarPreciosMasivos'])->name('actualizarPreciosMasivos');


Route::resource('/productos', ProductosController::class) ;

