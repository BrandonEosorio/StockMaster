<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //        Schema::create('productos', function (Blueprint $table) {
            Product::create([
            'Nombre_Producto' => 'Arroz Blanco',
            'Descripcion' => 'Cereal Blanco para consumo humano',
            'Precio' => 100.50,
            'Existencias' => 100
            ]);

            Product::create([
                'Nombre_Producto' => 'Aceite de oliva',
                'Descripcion' => 'Aceite de cocina etiquetado como mas sano y mejor',
                'Precio' => 140.99,
                'Existencias' => 40
                ]);
    }
}
