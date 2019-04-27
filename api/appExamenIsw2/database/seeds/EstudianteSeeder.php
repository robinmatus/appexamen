<?php

use Illuminate\Database\Seeder;
use App\Estudiante;
class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::create([
          'identificacion' => '1-1111-1111',
          'nombre' => 'Pedro',
          'apellido' => 'Pérez'
        ]);

        Estudiante::create([
          'identificacion' => '2-1122-1331',
          'nombre' => 'María',
          'apellido' => 'Acuña'
        ]);
    }
}
