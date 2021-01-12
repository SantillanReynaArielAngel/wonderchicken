<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //RELACION POLIMORFICA NORMAL 1 A 1
    public function personaable()
    {
        return $this->morphTo();
    }

    //RELACION NORMAL 1 A 1
    public function credencial()
    {
        return $this->hasOne('App\Credencial');
    }
    //use HasFactory;
}
