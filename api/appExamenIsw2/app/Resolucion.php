<?php

namespace App;
use Crypt;
use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $table = "resoluciones";

    public function periodo()
    {
       return $this->belongsto('App\Periodo');
    }

    public function getCodigoAttribute($value){
      return Crypt::decrypt($this->attributes['codigo']);
    }

    public function getTiporesAttribute($value){
      return Crypt::decrypt($this->attributes['tipores']);
    }

    public function getEstadoAttribute($value){
      return Crypt::decrypt($this->attributes['estado']);
    }


}
