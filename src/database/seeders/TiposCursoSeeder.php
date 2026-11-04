<?php

namespace Database\Seeders;

use App\Models\TiposCurso;
use Illuminate\Database\Seeder;

class TiposCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TiposCurso::factory()
            ->count(5)
            ->create();
    }
}
