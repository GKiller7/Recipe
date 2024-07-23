<?php

namespace Database\Factories;

use App\Models\Rating;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition()
    {
        return [
            'recipe_id' => Recipe::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->paragraph,
        ];
    }
}
