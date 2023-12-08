<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence,
            'category' => fake()->word,
            'description' => fake()->paragraph,
            'price' => fake()->word,
            'best_before' => fake()->date,
            'created_at' => now(),
            'updated_at' => now(),
            'picture' =>fake()->imageUrl,
            'supplier_id' => 1,
        ];
    }
}
