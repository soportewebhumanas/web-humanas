<?php

namespace Database\Seeders;

use App\Models\TiposEvento;
use Illuminate\Database\Seeder;

class TiposEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposEvento::factory()
        ->create(['nombre' => 'Simposio']);
        TiposEvento::factory()
        ->create(['nombre' => 'Conferencia']);
        TiposEvento::factory()
        ->create(['nombre' => 'Seminario']);
    }
}
