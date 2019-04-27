<?php

use Illuminate\Database\Seeder;
use App\Resolucion;

class ResolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resolucion::create([
          'codigo'=>Crypt::encrypt('NI_I201901'),
          'tipoRes'=>Crypt::encrypt('Nuevo Ingreso'),
          'estado'=>Crypt::encrypt('Aplicado'),
          'fecha'=>'2019-04-10',
          'periodo_id'=>1
        ]);

        Resolucion::create([
          'codigo'=>Crypt::encrypt('REV_I201901'),
          'tipoRes'=>Crypt::encrypt('Revalidaciones'),
          'estado'=>Crypt::encrypt('Pendiente'),
          'fecha'=>'2019-04-11',
          'periodo_id'=>2
        ]);

        Resolucion::create([
          'codigo'=>Crypt::encrypt('PLAN_I201901'),
          'tipoRes'=>Crypt::encrypt('Planilla'),
          'estado'=>Crypt::encrypt('Aplicado'),
          'fecha'=>'2019-04-12',
          'periodo_id'=>3
        ]);

        Resolucion::create([
          'codigo'=>Crypt::encrypt('PLAN_I201902'),
          'tipoRes'=>Crypt::encrypt('Planilla'),
          'estado'=>Crypt::encrypt('Aplicado'),
          'fecha'=>'2019-04-13',
          'periodo_id'=>1
        ]);

        Resolucion::create([
          'codigo'=>Crypt::encrypt('PLAN_I201903'),
          'tipoRes'=>Crypt::encrypt('Planilla'),
          'estado'=>Crypt::encrypt('Pendiente'),
          'fecha'=>'2019-04-14',
          'periodo_id'=>2
        ]);
    }
}
