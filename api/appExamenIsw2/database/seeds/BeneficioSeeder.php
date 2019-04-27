<?php

use Illuminate\Database\Seeder;
use App\Beneficio;

class BeneficioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 1,
        ]);

        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 2,
        ]);

        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 3,
        ]);

        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 4,
        ]);

        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 5,
        ]);

        Beneficio::create([
          'tipoBeneficio' => 'Socioeconómica',
          'descripcion' => 'Socioeconómica',
          'categoria_id' => 6,
        ]);
    }
}
