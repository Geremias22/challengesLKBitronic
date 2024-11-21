<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); 
            $table->string('codigo_catalogo')->unique(); // Código Catálogo único
            $table->string('nombre');                   // Nombre del producto
            $table->decimal('precio', 10, 2);          // Precio del producto (10 dígitos, 2 decimales)
            $table->enum('estado', ['Nuevo', 'Modificado', 'Nuevo Precio'])->default('Nuevo'); // Estado
            $table->timestamps(); // Fechas de creación y modificación
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
