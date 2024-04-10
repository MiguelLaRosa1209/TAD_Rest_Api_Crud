<?php

namespace Database\Factories;

use App\Models\Alerta;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertaFactory extends Factory
{
    protected $model = Alerta::class;

    public function definition()
    {
        return [
            'id_zona' => $this->faker->randomNumber(),
            'tipo_alerta' => $this->faker->randomElement(['robo', 'asalto', 'accidente']),
            'id_Denuncia' => $this->faker->randomNumber(),
        ];
    }
}