<?php

namespace Database\Factories;

use App\Models\Seguimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeguimientoFactory extends Factory
{
    protected $model = Seguimiento::class;

    public function definition()
    {
        return [
            'id_Denuncia' => $this->faker->randomNumber(),
            'Estado' => $this->faker->word(),
            'Notas' => $this->faker->text(),
            'Hora_seg' => $this->faker->dateTime(),
        ];
    }
}
