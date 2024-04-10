<?php

namespace Database\Factories;

use App\Models\Denuncia;
use Illuminate\Database\Eloquent\Factories\Factory;

class DenunciaFactory extends Factory
{
    protected $model = Denuncia::class;

    public function definition()
    {
        return [
            'id_usuario' => $this->faker->randomNumber(),
            'Tipo' => $this->faker->word(),
            'Sescripcion' => $this->faker->sentence(),
            'Momento' => $this->faker->date(),
            'Estado' => $this->faker->text(),
            'Latitud' => $this->faker->latitude(),
            'Longitud' => $this->faker->longitude(),
        ];
    }
}