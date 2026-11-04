<?php

namespace Database\Factories;

use App\Models\TiposCurso;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TiposCursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TiposCurso::class;

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
