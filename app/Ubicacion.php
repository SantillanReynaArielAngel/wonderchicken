<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //RELACION NORMAL INVERSA 1 A N
    public function costodelivery()
    {
        return $this->belongsTo('App\CostoDelivery');
    }

     //RELACION NORMAL 1 A N
     public function pedidos()
     {
         return $this->hasMany('App\Pedido');
     }
     
    //use HasFactory;
}
