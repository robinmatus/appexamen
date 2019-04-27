<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
  public function resoluciones()
  {
    return $this->hasMany('App\Resolucion');
  }
}
