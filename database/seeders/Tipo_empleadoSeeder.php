<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use App\Models\Tipo_empleado;  
class Tipo_empleadoSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     */ 
    public function run(): void 
    { 
        Tipo_empleado::create([ 
            'nombre' => 'administrativo', 
        ]); 
        Tipo_empleado::create([ 
            'nombre' => 'asesor', 
        ]); 
        Tipo_empleado::create([ 
            'nombre' => 'entregador', 
        ]); 
        Tipo_empleado::create([ 
            'nombre' => 'gerente' 
        ]); 
    } 
}