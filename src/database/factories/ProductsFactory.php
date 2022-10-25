<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Categories::factory(),
            'name' => fake()->words(3, true),
            'price' => fake()->randomNumber(5, false),
            'count' => fake()->randomNumber(5, false),
            'description' => fake()->text(200),
            'user_ID' => Categories::factory(),
        ];
    }
}


