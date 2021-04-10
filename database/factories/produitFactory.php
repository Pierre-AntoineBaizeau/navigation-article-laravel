<?php

namespace Database\Factories;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'       => $this->faker->words(2, true),
            'prix'    => $this->faker->numberBetween(10, 10000),
            'image'    => $this->faker->imageUrl(640, 480),
            'description'    => $this->faker->sentence(3, true),
            'stock'    => $this->faker->numberBetween(1, 100),
            'category_id' => Category::inRandomOrder()->first()->id,

        ];
    }
}
