<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    //RELACION NORMAL INVERSA 1 A 1
    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
    //use HasFactory;
}
