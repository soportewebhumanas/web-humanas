<?php

namespace Database\Seeders;

use App\Models\Modalidad;
use Illuminate\Database\Seeder;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidad::factory()
        ->create(['nombre' => 'presencial']);
        Modalidad::factory()
        ->create(['nombre' => 'a distancia']);
    }
}
