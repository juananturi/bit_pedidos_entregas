<?php 
 
namespace Database\Factories; 
 
use Illuminate\Database\Eloquent\Factories\Factory; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
/** 
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario> 
 */ 
class UsuarioFactory extends Factory 
{ 
    /** 
     * Define the model's default state. 
     * 
     * @return array<string, mixed> 
     */ 
    public function definition(): array 
    { 
        return [ 
            DB::table('usuarios')->insert([ 
                'nombre' => 'administrador', 
                'email' => 'pedidos@entregas.com', 
                'contraseña' => Hash::make('123456789'), 
            ]) 
        ]; 
    } 
}