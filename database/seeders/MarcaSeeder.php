<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
       
            ['id' => 1,  'nombre' =>'Apple'],
            ['id' => 2,  'nombre' =>'Microsoft'],
            ['id' => 3,  'nombre' =>'Coca-Cola'],
            ['id' => 4,  'nombre' =>'IBM'],
            ['id' => 5,  'nombre' =>'Google'],
            ['id' => 6,  'nombre' =>'McDonald’s'],
            ['id' => 7,  'nombre' =>'General Electric'],
            ['id' => 8,  'nombre' =>'Intel'],
            ['id' => 9,  'nombre' =>'Samsung'],
            ['id' => 10, 'nombre' => 'Louis Vuitton'],
            ['id' => 11, 'nombre' => 'BMW'],
            ['id' => 12, 'nombre' => 'Cisco'],
            ['id' => 13, 'nombre' => 'Oracle'],
            ['id' => 14, 'nombre' => 'Toyota'],
            ['id' => 15, 'nombre' => 'Mercedes-Benz'],
            ['id' => 16, 'nombre' => 'Disney'],
            ['id' => 17, 'nombre' => 'Wal-Mart'],
    ];
    Marca::insert($data);
    }
}