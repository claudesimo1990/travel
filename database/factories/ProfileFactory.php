<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'street' => $this->faker->streetName,
            'phone' => $this->faker->phoneNumber,
            'birthday' => $this->faker->dateTime,
            'about' => $this->faker->sentence(60),
            'facebook' => $this->faker->name,
            'instagram' => $this->faker->name,
            'linkedin' => $this->faker->name,
        ];
    }
}
