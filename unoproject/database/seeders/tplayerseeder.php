<?php

namespace Database\Seeders;

use App\Models\tplayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tplayerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tplayer::truncate();
        tplayer::factory(50)->create();
    }
}
