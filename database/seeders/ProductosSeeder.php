<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productos::factory()->count(10)->create();
    }
}
