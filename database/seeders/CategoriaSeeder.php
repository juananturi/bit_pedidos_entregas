<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
       
            ['id' => 1,  'nombre' =>'vehiculos'],
            ['id' => 2,  'nombre' =>'supermercado'],
            ['id' => 3,  'nombre' =>'tecnologia'],
            ['id' => 4,  'nombre' =>'electrodomesticos'],
            ['id' => 5,  'nombre' =>'hogar y muebles'],
            ['id' => 6,  'nombre' =>'deportes y fitness'],
            ['id' => 7,  'nombre' =>'belleza'],
            ['id' => 8,  'nombre' =>'cuidado personal'],
            ['id' => 9,  'nombre' =>'asesorios para vehiculos'],
            ['id' => 10, 'nombre' => 'herramientas'],
            ['id' => 11, 'nombre' => 'contrucción'],
            ['id' => 12, 'nombre' => 'inmuebles'],
            ['id' => 13, 'nombre' => 'moda'],
            ['id' => 14, 'nombre' => 'juegos'],
            ['id' => 15, 'nombre' => 'juguetes'],
            ['id' => 16, 'nombre' => 'bebes'],
            ['id' => 17, 'nombre' => 'productos sustentables'],
    ];
    Categoria::insert($data);
    }
}