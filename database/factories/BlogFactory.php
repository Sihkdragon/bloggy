<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => str($this->faker->word())->title(),
            'author' => $this->faker->name(),
            'description' => $this->faker->sentence(10),
            'body' => $this->faker->paragraphs(5, true),
            'likes' => $this->faker->randomNumber(3, false)
        ];
    }
}
