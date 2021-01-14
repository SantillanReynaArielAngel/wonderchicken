<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    //RELACION NORMAL INVERSO 1 A N 
    // public function presa()
    // {
    //     return $this->belongsTo('App\Presa');
    // }

    //RELACION NORMAL INVERSO 1 A N 
    public function regalo()
    {
        return $this->belongsTo('App\Regalo');
    }
    
    //RELACION NORMAL 1 A N
    public function detallepedidos()
    {
        return $this->hasMany('App\DetallePedido');
    }


    //RELACION NORMAL N A N
    public function articulos()
    {
        return $this->belongsToMany('App\Articulo');
    }


   // use HasFactory;
}
