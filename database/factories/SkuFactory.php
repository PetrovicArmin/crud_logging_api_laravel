<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sku>
 */
class SkuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'weight' => rand(1, 1000) / 100.0,
            'color' => fake()->colorname(),
            'skuCode' => fake()->asciify('********'),
            'productId' => rand(1,20),
            'countryOfOrigin' => fake()->country(),
            'price' => rand(1,1000) / 100.0,
            'quantityInStock' => rand(1, 500)
        ];
    }
}
