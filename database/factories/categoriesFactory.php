<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parent_id' => $this->faker->numberBetween(0, 10),
            'lft' => $this->faker->randomNumber(),
            'rgt' => $this->faker->randomNumber(),
            'depth' => $this->faker->randomDigit(),
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,
        ];
    }
}
