<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name,
            'content' => '',
            'fecha_inicio' => $this->faker->dateTime,
            'fecha_fin' => $this->faker->dateTime,
            'carga_horaria' => $this->faker->randomNumber(0),
            'active' => $this->faker->boolean,
            'tarifa' => $this->faker->randomNumber(0),
            'lugar_id' => \App\Models\Lugar::factory(),
            'modalidad_id' => \App\Models\Modalidad::factory(),
            'tipo_id' => \App\Models\TiposEvento::factory(),
        ];
    }
}
