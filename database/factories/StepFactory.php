<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\Step;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    protected $model = Step::class;

    public function definition()
    {
        return [
            'recipe_id' => Recipe::factory(),
            'step_number' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
        ];
    }
}
