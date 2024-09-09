<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cuenta;
use App\Models\Rol;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuenta>
 */
class CuentaFactory extends Factory
{
    /**
     * El modelo asociado con la factory.
     *
     * @var string
     */
    protected $model = Cuenta::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Selecciona un rol aleatorio existente
            'rol' => Rol::factory(), // Usa Rol::factory() para generar un rol aleatorio

            // Selecciona un usuario aleatorio existente
            'usuario' => Usuario::factory(), // Usa Usuario::factory() para generar un usuario aleatorio

            // Genera una contraseña aleatoria
            'password' => $this->faker->password,

            // Genera un saldo aleatorio
            'saldo' => $this->faker->randomFloat(2, 0, 10000), // Saldo entre 0 y 10,000 con 2 decimales
        ];
    }
}
