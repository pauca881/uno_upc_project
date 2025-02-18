<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tplayer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tpartida>
 */
class tpartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $totalPlayers = count(tplayer::all()) - 1;
        $players = tplayer::all();
        
        // $array_player = [];

        // $player = tplayer::all()->take(1)[0]['id'];

        // for($i = 0; $i < $totalPlayers; $i++) {
        //     array_push($array_player, $players[$i]['id']);
        // }

        return [
            'score' => fake()->randomNumber(4, false),
            'id_player' => fake()->passthrough($players[random_int(1, $totalPlayers)]['id'])
        ];
    }
}
