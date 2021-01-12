<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    //RELACION NORMAL INVERDA 1 A 1 
    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }
    //use HasFactory;
}
