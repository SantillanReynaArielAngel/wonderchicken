<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostoDelivery extends Model
{
    //RELACION NORMAL INVERSA 1 A N
    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }
    //use HasFactory;
}
