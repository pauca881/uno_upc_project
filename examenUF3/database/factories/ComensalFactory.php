<?php

namespace Database\Factories;
use App\Models\Comensal;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comensal>
 */
class ComensalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
   
            
            'nombre' => $this->faker->word,
            'correo' => $this->faker->word,
            'telefono' => fake()->randomNumber(4, false),
            'fecha' => $this->faker->date,
            'id_mesa' => fake()->randomNumber(1, false)


        ];
    }
}
