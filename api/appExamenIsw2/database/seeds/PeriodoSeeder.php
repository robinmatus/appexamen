<?php

use Illuminate\Database\Seeder;
use App\Periodo;

class PeriodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Periodo::create([
          'codigo'=>'I C',
          'descripcion'=>'Primer Cuatrimestre',
          'anno'=>'2019'
        ]);

        Periodo::create([
          'codigo'=>'II C',
          'descripcion'=>'Segundo Cuatrimestre',
          'anno'=>'2019'
        ]);

        Periodo::create([
          'codigo'=>'III C',
          'descripcion'=>'Tercero',
          'anno'=>'2019'
        ]);
    }
}
