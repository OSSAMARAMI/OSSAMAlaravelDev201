<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends Factory<Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition()
{
    return [
        'name' => $this->faker->sentence(3),
        'description' => $this->faker->paragraph(),
        'price' => $this->faker->randomFloat(2, 10, 1000), 
        'category_id' => Category::factory(), 

    ];
}
}
