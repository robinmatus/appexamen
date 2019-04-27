<?php

use Illuminate\Database\Seeder;
use App\Resolucion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PeriodoSeeder::class);
        $this->call(ResolucionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(BeneficioSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(BeneficioEstudianteSeeder::class);
    }
}
