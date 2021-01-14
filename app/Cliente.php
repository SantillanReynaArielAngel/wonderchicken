<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //RELACION NORMAL 1 A N
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }

    //RELACION POLIMORFICA NORMAL 1 A 1
    public function persona()
    {
        return $this->morphOne('App\Persona', 'personaable');
    }
    //use HasFactory;
}
