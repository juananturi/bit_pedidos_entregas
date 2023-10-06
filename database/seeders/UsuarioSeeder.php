<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use App\Models\Usuario; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
class UsuarioSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     */ 
    public function run(): void 
    { 
        Usuario::create([ 
            'nombre' => 'administrador', 
            'contraseña' => '12345678', 
            'email' => 'pedidos@entregas.com' 
        ]); 
    } 
}