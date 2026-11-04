<?php

namespace Database\Seeders;

use App\Models\Lugar;
use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lugar::factory()
        ->create(['nombre' => 'Santa Rosa']);
        Lugar::factory()
        ->create(['nombre' => 'General Pico']);
        Lugar::factory()
        ->create(['nombre' => 'General Acha']);
    }
}
