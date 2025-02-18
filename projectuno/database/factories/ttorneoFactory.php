<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Datos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ttorneo>
 */{{  }}
class ttorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $torneos = array(
            'Nuclear', 'Nuke-outHavoc', 'Hoedown',
            'Executive', 'Exhibition', 'Futuristic', 
            'Frenzy', 'Chaotic', 'Conquest',
            'Takedown', 'Tourney', 'Clash of Champions',
            'Legendary Lethal League', 'Havoc', 
            'Hour', 'Cosmic Conflict', 'Clash of the Champ Champions',
            'Executive Exhibition', 'Legends League', 'Juggernaut Joust',
            'Atomic Altercation', 'The Title Tussle', 'Infinite Invitational',
            'Wild West Warzone', 'Royal Rumble Rampage', 'Mythical Mayhem'
        );

        // $torneoName = $torneos[array_rand($torneos, 1)];
        // randomNumber(2, false)

        return [
            'id' => fake()->unique()->passthrough('t' . strval(random_int(1, 9999))),
            'name' =>fake()->randomElement($torneos),
            'description' => fake()->text()
        ];
    }
}
