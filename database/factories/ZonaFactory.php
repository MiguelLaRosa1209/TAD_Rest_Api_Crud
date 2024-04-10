<?php

namespace Database\Factories;

use App\Models\Zona;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZonaFactory extends Factory
{
    protected $model = Zona::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'seguridad' => $this->faker->randomElement(['seguro', 'inseguro']),
            'Latitud_menor' => $this->faker->latitude(),
            'Latitud_mayor' => $this->faker->latitude(),
            'Longitud_menor' => $this->fakzer->longitude(),
            'Longitud_mayor' => $this->faker->longitude(),
        ];
    }
}
