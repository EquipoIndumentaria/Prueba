<?php

namespace Database\Factories;

use App\Models\tblproductos;
use Illuminate\Database\Eloquent\Factories\Factory;

class tblproductosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tblproductos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vchProd' => $this->faker->word,
            'vchDesc' => $this->faker->sentence(6),
            'vchTalla' => $this->faker->word,
            'intCant' => $this->faker->randomNumber(5, false),
            'fltPrecio' => $this->faker->randomFloat(2, 20, 1000),
            'intIdCat' => 1
        ];
    }
}
