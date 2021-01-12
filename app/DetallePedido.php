<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    //RELACION NORMAL INVERSO 1 A N
    public function promocion()
    {
        return $this->belongsTo('App\Promocion');
    }
    
    //RELACION NORMAL INVERSA 1 A N 
    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }

    //RELACION NORMAL INVERSO 1 A N
    public function articulo()
    {
        return $this->belongsTo('App\Articulo');
    }
    //use HasFactory;
}
