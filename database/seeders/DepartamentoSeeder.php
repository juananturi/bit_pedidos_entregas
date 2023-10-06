<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departamento; 

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1,  'nombre' =>'AMAZONAS'],
            ['id' => 2,  'nombre' =>'ANTIOQUIA'],
            ['id' => 3,  'nombre' =>'ARAUCA'],
            ['id' => 4,  'nombre' =>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'],
            ['id' => 5,  'nombre' =>'ATLANTICO'],
            ['id' => 6,  'nombre' =>'BOLIVAR'],
            ['id' => 7,  'nombre' =>'BOYACA'],
            ['id' => 8,  'nombre' =>'CALDAS'],
            ['id' => 9,  'nombre' =>'CAQUETA'],
            ['id' => 10, 'nombre' => 'CASANARE'],
            ['id' => 11, 'nombre' => 'CAUCA'],
            ['id' => 12, 'nombre' => 'CESAR'],
            ['id' => 13, 'nombre' => 'CHOCO'],
            ['id' => 14, 'nombre' => 'CORDOBA'],
            ['id' => 15, 'nombre' => 'CUNDINAMARCA'],
            ['id' => 16, 'nombre' => 'GUAINIA'],
            ['id' => 17, 'nombre' => 'GUAJIRA'],
            ['id' => 18, 'nombre' => 'GUAVIARE'],
            ['id' => 19, 'nombre' => 'HUILA'],
            ['id' => 20, 'nombre' => 'MAGDALENA'],
            ['id' => 21, 'nombre' => 'META'],
            ['id' => 22, 'nombre' => 'NARIÑO'],
            ['id' => 23, 'nombre' => 'NORTE DE SANTANDER'],
            ['id' => 24, 'nombre' => 'PUTUMAYO'],
            ['id' => 25, 'nombre' => 'QUINDIO'],
            ['id' => 26, 'nombre' => 'RISARALDA'],
            ['id' => 27, 'nombre' => 'SANTANDER'],
            ['id' => 28, 'nombre' => 'SUCRE'],
            ['id' => 29, 'nombre' => 'TOLIMA'],
            ['id' => 30, 'nombre' => 'VALLE DEL CAUCA'],
            ['id' => 31, 'nombre' => 'VAUPES'],
            ['id' => 32, 'nombre' => 'VICHADA']
        ];

        Departamento::insert($data);
        
    }
}
