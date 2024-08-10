<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Courses;
use App\Models\Material;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ardi Admin',
            'email' => 'ardi@gmail.com',
            'password' => Hash::make('password')
        ]);

        Courses::factory()->count(10)->create();
        Material::factory()->count(10)->create();

    }
}
