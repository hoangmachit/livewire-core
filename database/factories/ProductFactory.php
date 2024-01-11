<?php

namespace Database\Factories;

use App\Models\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->text(25);
        return [
            'name' => $name,
            'slug' => str()->slug($name),
            'description' => fake()->text(255),
            'content' => fake()->text(500),
            'language' => 'vi',
            'status_id' => ProductStatus::inRandomOrder()->first()->id,
        ];
    }
}
