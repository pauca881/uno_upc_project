<?php

namespace Database\Seeders;

use App\Models\ttorneo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ttorneoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ttorneo::truncate();
        ttorneo::factory(50)->create();
    }
}
