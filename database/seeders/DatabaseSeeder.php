<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        User::factory()->create([
            'name' => 'William Tarnadi',
            'email' => 'test@example.com',
        ]);

        $ingredients = ['Beef', 'Leek', 'Beacon', 'Onion', 'Garlic'];

        foreach ($ingredients as $ingredient ) {
            Ingredient::factory()->create([
                'name' => $ingredient
            ]);
        }

        
    }
}
