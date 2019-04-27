<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficio_Estudiante extends Model
{
    protected $table = 'beneficio__estudiantes';
    protected $fillable = ['beneficio_id', 'estudiante_id'];
}
