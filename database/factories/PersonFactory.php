<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('es_AR');

        return [
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'age' => rand(18, 50),
            'phone' => rand(1111111111, 1199999999)
        ];
    }
}
