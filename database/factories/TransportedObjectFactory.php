<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransportedObjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(8),
            'bg_color' => $this->faker->colorName(),
            'text_color' => $this->faker->colorName(),
        ];
    }
}
