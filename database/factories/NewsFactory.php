<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'content' => fake()->paragraph(),
            'status' => 1,
            'author_id' => 2,
            'category_id' => 3,
            'date_posted' => '2022-11-17',
            'date_updated' => '2022-11-17',
        ];
    }
}
