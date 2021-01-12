<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //RELACION NORMAL INVERSA 1 AN
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    //use HasFactory;
}
