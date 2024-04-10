<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'clave' => bcrypt('password'), // Ajusta esto según tu lógica de encriptación
            'email_usuario' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            'tipo_usuario' => $this->faker->randomElement(['admin', 'usuario']),
        ];
    }
}
