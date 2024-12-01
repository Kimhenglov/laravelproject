<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Example of creating a specific user directly
        User::create([
            'name' => 'SvayPanharith',
            'email' => 'panharith995@gmail.com',
            'password' => bcrypt('pa$$word'), 
            'role' => 'admin', 
        ]);

        // Example of creating a test user using the factory
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

