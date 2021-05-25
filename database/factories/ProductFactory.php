<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb = 4, $asText = true);
        return [
            'name' => $product_name,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(1000),
            'regular_price' => $this->faker->numberBetween(10, 500),
            'SKU' => 'ITEM'. $this->faker->numberBetween(100,500),
            'stock' => $this->faker->numberBetween(2, 10),
            'featured' => 1,
            'img' => 'digital_'.$this->faker->unique()->numberBetween(1,22) . '.jpg',
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
