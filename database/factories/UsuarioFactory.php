<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * El modelo asociado con la factory.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define el estado predeterminado del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Genera un DNI aleatorio, por ejemplo, usando una cadena alfanumérica
            'dni' => $this->faker->unique()->numerify('##########'), // 10 dígitos únicos
            
            // Genera un nombre aleatorio
            'nombre' => $this->faker->firstName,
            
            // Genera un apellido aleatorio
            'apellido' => $this->faker->lastName,
            
            // Genera una edad aleatoria entre 18 y 99 años
            'edad' => $this->faker->numberBetween(18, 99),
        ];
    }
}
