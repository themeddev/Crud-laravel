<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anounce>
 */
class AnounceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(3),
            'description'=> $this->faker->sentence(10),
            'type'=>$this->faker->randomElement([
                'Appartement',
                'Maison',
                'Villa',
                'Magasin',
                'Terrain',
            ]),
            'ville' => $this->faker->city,
            'superficie'=> $this->faker->randomFloat('2',0,2),
            'neuf' => $this->faker->boolean(),
            'prix' => $this->faker->randomFloat(2, 0, 9999999999.99),
        ];
    }
}
