<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Rating;
use App\Models\Recipe;
use App\Models\Step;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategoriesSeeder::class,
            FoodSeeder::class,
        ]);

        // Kalan modeller için factory'leri çalıştıralım
        Ingredient::factory(20)->create();
        Recipe::factory(50)
            ->has(Step::factory()->count(5))
            ->has(Rating::factory()->count(3))
            ->create();

        User::factory(10)->create()->each(function ($user) {
            $user->favorites()->attach(Recipe::inRandomOrder()->take(rand(1, 5))->pluck('id'));
        });
    }
}
