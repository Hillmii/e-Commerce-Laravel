<?php

namespace Database\Factories;

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
        $name = fake()->sentence(2);
        $result = function () use ($name) {
            $slugstr = strtolower($name);
            $slug = str_replace(' ', '-', $slugstr);
            $final = rtrim($slug, '.');
            $slugFinal = '-' . $final;
            return $slugFinal;
        };

        return [
            'name' => $name,
            'desc' => fake()->paragraph(1),
            'slug' => $result(),
            'category_id' => mt_rand(1, 5),
            'detailCategory_id' => mt_rand(1, 10),
            'price' => mt_rand(50, 100),
        ];
    }
}
