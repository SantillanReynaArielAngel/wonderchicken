<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //RELACION NORMAL POLIMORFICA 1 A 1
    public function articuloable()
    {
        return $this->morphTo();
    }

    //RELACION NORMAL 1 A N
    public function detallepedidos()
    {
        return $this->hasMany('App\DetallePedido');
    }

    //RELACION NORMAL INVERSA N A N 
    public function promociones()
    {
        return $this->belongsToMany('App\Promocion');
    }
    //use HasFactory;
}
