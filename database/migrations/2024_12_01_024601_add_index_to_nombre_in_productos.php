<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::table('productos', function (Blueprint $table) {
        $table->index('nombre'); // Crear un índice en el campo 'nombre'
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    Schema::table('productos', function (Blueprint $table) {
        $table->dropIndex(['nombre']); // Elimina el índice en caso de rollback
    });
    }
};
