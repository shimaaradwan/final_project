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
    public function definition()
    {
        return [
            'title' => fake()->text(),
            'content' => fake()->text(),
            'featured' => rand(0,1),
            'published' => rand(0,1),
            'image' => 'front/assets/imgs/img-' .rand(1,4). '.jpg',
            'views' => fake()->randomNumber()
        ];
    }
}
