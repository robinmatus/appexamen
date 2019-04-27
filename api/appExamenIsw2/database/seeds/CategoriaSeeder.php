<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
          'categoria' =>'4',
          'descripcion' => 'aeo',
          'monto' => Crypt::encrypt(125000)
        ]);

        Categoria::create([
          'categoria' => '4',
          'descripcion' => 'alim',
          'monto' => Crypt::encrypt(75000)
        ]);

        Categoria::create([
          'categoria' => '4',
          'descripcion' => 'pare',
          'monto' => Crypt::encrypt(50000)
        ]);


        Categoria::create([
          'categoria' => '5',
          'descripcion' => 'aeo',
          'monto' => Crypt::encrypt(100000)
        ]);

        Categoria::create([
          'categoria' => '5',
          'descripcion' => 'alim',
          'monto' => Crypt::encrypt(50000)
        ]);

        Categoria::create([
          'categoria' => '5',
          'descripcion' => 'pare',
          'monto' => Crypt::encrypt(50000)
        ]);
    }
}
