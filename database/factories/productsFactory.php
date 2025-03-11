<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'id_type' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
            'unit_price' => $this->faker->randomFloat(2, 10, 100),
            'promotion_price' => $this->faker->randomFloat(2, 5, 50),
            'image' => $this->faker->imageUrl,
            'unit' => $this->faker->word,
            'new' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
