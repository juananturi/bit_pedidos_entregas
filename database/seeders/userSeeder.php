<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ])->assignRole('administrativo');
        ;
        User::create([
            'name' => 'gerente',
            'email' => 'gerente@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ])->assignRole('gerente');
        ;
        User::create([
            'name' => 'repartidor',
            'email' => 'repartidor@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ])->assignRole('repartidor');
        User::create([
            'name' => 'superusuario',
            'email' => 'superusuario@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ])->assignRole('superusuario');
        User::create([
            'name' => 'asesor',
            'email' => 'asesor@entregas.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ])->assignRole('asesor');
    }
}