<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Llama a los seeders que quieras ejecutar
        $this->call(UsuarioSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(CuentaSeeder::class);
    }
}
