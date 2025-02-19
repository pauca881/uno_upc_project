<?php

namespace Database\Factories;
use App\Models\Mesa;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mesa>
 */
class MesaFactory extends Factory
{

    protected $model = Mesa::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
                        'nombre' => $this->faker->word,
                        'capacidad' => fake()->randomNumber(4, false),


        ];
    }
}
