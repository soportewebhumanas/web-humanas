<?php

namespace Database\Factories;

use App\Models\TiposEvento;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TiposEventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TiposEvento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
        ];
    }
}
