<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ttorneo;
use App\Models\tplayer;

class tplayertorneoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $torneos = ttorneo::all();
        $players = tplayer::all();

        foreach ($players as $player) {
            $player->torneos()->attach(
                $torneos->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
