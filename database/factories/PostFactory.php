<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'slug' => fake()->slug(),
            'title' => fake()->title(),
            'description' => fake()->paragraph(10),
            'image_path' => fake()->sentence(),
        ];
    }
}
