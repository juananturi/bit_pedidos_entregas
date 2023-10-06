<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'cedula' => $this->faker->unique()->randomNumber(9),
            'direccion' => $this->faker->address,
            'barrio' => $this->faker->word,
            'departamento_id' => $this->faker->numberBetween(1, 10),
            'municipio_id' => $this->faker->numberBetween(1, 50),
            'descripcion' => $this->faker->sentence,
            'activo' => $this->faker->boolean(80), // 80% de probabilidad de ser activo
            'fecha_nacimiento' => $this->faker->date,
            'telefono' => $this->faker->phoneNumber,
            'codigo' => $this->faker->unique()->randomNumber(6),
        ];
    }
}
