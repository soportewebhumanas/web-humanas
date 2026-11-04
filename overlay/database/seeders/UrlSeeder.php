<?php

namespace Database\Seeders;

use App\Models\Parametro;
use Illuminate\Database\Seeder;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Parametro::create(['clave' => 'ADMIN_SITE_URL', 'valor' => env('APP_URL')]);
    }
}
