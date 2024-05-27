<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'seller_id' => 1,
            'category_id' => rand(1, 10),
            'img_src' => $this->faker->image(storage_path('app/public/item_images'), 300, 300, 'png', false),
            'condition_id' => rand(1, 6),
            'item_name' => $this->faker->lexify('サンプル商品????'),
            'description' => $this->faker->realText(100),
            'price' => $this->faker->numberBetween(100, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
