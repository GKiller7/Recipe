<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $recipes = [
            1 => [
                ['name' => 'Cheesecake', 'image' => 'desserts/cheesecake.jpg'],
                ['name' => 'Tiramisu', 'image' => 'desserts/tiramisu.jpg'],
                ['name' => 'Macarons', 'image' => 'desserts/macarons.jpg'],
                ['name' => 'Baklava', 'image' => 'desserts/baklava.jpg'],
                ['name' => 'Brownies', 'image' => 'desserts/brownies.jpg'],
                ['name' => 'Panna Cotta', 'image' => 'desserts/panna_cotta.jpg'],
                ['name' => 'Croissant', 'image' => 'desserts/croissant.jpg'],
                ['name' => 'Apple Pie', 'image' => 'desserts/apple_pie.jpg'],
                ['name' => 'Pavlova', 'image' => 'desserts/pavlova.jpg'],
                ['name' => 'Gelato', 'image' => 'desserts/gelato.jpg'],
            ],
            2 => [
                ['name' => 'Dograma', 'image' => 'soups/dograma.jpg'],
                ['name' => 'Dolama', 'image' => 'soups/dolama.jpg'],
                ['name' => 'Minestrone', 'image' => 'soups/minestrone.jpg'],
                ['name' => 'French Onion Soup', 'image' => 'soups/french_onion_soup.jpg'],
                ['name' => 'Gazpacho', 'image' => 'soups/gazpacho.jpg'],
                ['name' => 'Borscht', 'image' => 'soups/borscht.jpg'],
                ['name' => 'Chicken Noodle Soup', 'image' => 'soups/chicken_noodle_soup.jpg'],
                ['name' => 'Miso Soup', 'image' => 'soups/miso_soup.jpg'],
                ['name' => 'Lentil Soup', 'image' => 'soups/lentil_soup.jpg'],
                ['name' => 'Clam Chowder', 'image' => 'soups/clam_chowder.jpg'],
            ],
            3 => [
                ['name' => 'Somsa', 'image' => 'dough-based_dishes/somsa.jpg'],
                ['name' => 'Fitci', 'image' => 'dough-based_dishes/fitci.jpg'],
                ['name' => 'Islekli', 'image' => 'dough-based_dishes/islekli.jpg'],
                ['name' => 'Gutap', 'image' => 'dough-based_dishes/gutap.jpg'],
                ['name' => 'Pizza', 'image' => 'dough-based_dishes/pizza.jpg'],
                ['name' => 'Burritos', 'image' => 'dough-based_dishes/burritos.jpg'],
                ['name' => 'Empanadas', 'image' => 'dough-based_dishes/empanadas.jpg'],
                ['name' => 'Samosas', 'image' => 'dough-based_dishes/samosas.jpg'],
                ['name' => 'Calzones', 'image' => 'dough-based_dishes/calzones.jpg'],
                ['name' => 'Pierogi', 'image' => 'dough-based_dishes/pierogi.jpg'],
            ],
            4 => [
                ['name' => 'Burger', 'image' => 'main_dishes/burger.jpg'],
                ['name' => 'Sushi', 'image' => 'main_dishes/sushi.jpg'],
                ['name' => 'Steak', 'image' => 'main_dishes/steak.jpg'],
                ['name' => 'Paella', 'image' => 'main_dishes/paella.jpg'],
                ['name' => 'Lasagna', 'image' => 'main_dishes/lasagna.jpg'],
                ['name' => 'Chicken Tikka Masala', 'image' => 'main_dishes/chicken_tikka_masala.jpg'],
                ['name' => 'Beef Stroganoff', 'image' => 'main_dishes/beef_stroganoff.jpg'],
                ['name' => 'Chili con Carne', 'image' => 'main_dishes/chili_con_carne.jpg'],
                ['name' => 'Ratatouille', 'image' => 'main_dishes/ratatouille.jpg'],
                ['name' => 'Shawarma', 'image' => 'main_dishes/shawarma.jpg'],
            ],
        ];

        foreach ($recipes as $categoryId => $recipeData) {
            foreach ($recipeData as $recipe) {
                Recipe::create([
                    'category_id' => $categoryId,
                    'name' => $recipe['name'],
                    'image' => $recipe['image'],
                    'description' => $faker->paragraph(rand(2, 3)),
                ]);
            }
        }
    }
}
