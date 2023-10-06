<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 
use App\Models\User; 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'role' => fake()->numberBetween(1,3)
                
        ];

    }
        /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
    // public function administrator(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //        'role' =>  User::ROLE_ADMINISTRATIVO
    //     ]);
    // }
        
    // public function asesor(): static
    // {
    //     return $this->state(fn (array $attributes) => [
    //        'role' =>  User::ROLE_ASESOR
    //     ]);
    // }
    // public function entregador(): static{
    //     return $this->state(fn(array $attributes)=>[
    //         'role' => User::ROLE_ENTREGADOR
    //     ]); 
    // }
    // public function gerente(): static{
    //     return $this->state(fn(array $attributes)=>[
    //         'role' => User::ROLE_GERENTE
    //     ]);
    // }
}
