<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //RELACION POLIMORFICA NORMAL 1 A 1
    public function persona()
    {
        return $this->morphOne('App\Persona', 'personaable');
    }

    //use HasFactory;
}
