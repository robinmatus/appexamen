<?php

use Illuminate\Database\Seeder;
use App\Beneficio_Estudiante;

class BeneficioEstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beneficio_Estudiante::create([
          'estudiante_id' => 1,
          'beneficio_id' => 1
        ]);
        Beneficio_Estudiante::create([
          'estudiante_id' => 1,
          'beneficio_id' => 2
        ]);
        Beneficio_Estudiante::create([
          'estudiante_id' => 1,
          'beneficio_id' => 3
        ]);
        Beneficio_Estudiante::create([
          'estudiante_id' => 2,
          'beneficio_id' => 4
        ]);
        Beneficio_Estudiante::create([
          'estudiante_id' => 2,
          'beneficio_id' => 5
        ]);
        Beneficio_Estudiante::create([
          'estudiante_id' => 2,
          'beneficio_id' => 6
        ]);
    }
}
