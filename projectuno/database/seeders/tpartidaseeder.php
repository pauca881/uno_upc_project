<?php

namespace Database\Seeders;

use App\Models\tpartida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tpartidaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // tpartida::truncate();
        tpartida::factory(50)->create();
    }
}
