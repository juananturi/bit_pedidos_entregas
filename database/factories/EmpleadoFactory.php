<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\TextUI\Configuration\DirectoryCollectionIterator;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> $this->faker->name(),
            'apellido'=> $this->faker->lastName(),
            'cedula'=> $this->faker->numberBetween('1111111', '9999999'),
            'direccion'=> $this->faker->address(),
            'barrio'=>$this->faker->city(),
            'cargo'=>$this->faker->randomElement(['administrativo', 'repartidor', 'asesor', 'entregador']),
            'salario'=>$this->faker->numberBetween('1100000','9999999'),
            'departamento_id'=> '2',
            'municipio_id'=> $this->faker->numberBetween('3','123'),
            'tipo_empleado'=> $this->faker->numberBetween('1','4'),

        ];
    }
}