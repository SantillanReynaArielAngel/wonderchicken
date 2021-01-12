<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //RELACION NORMAL 1 A 1
    public function notificacion()
    {
        return $this->hasOne('App\Notificacion');
    }

    //RELACION NORMAL INVERSA 1 A N
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    //RELACION NORMAL INVERSA 1 A N
    public function cajero()
    {
        return $this->belongsTo('App\Cajero');
    }

    //RELACION NORMAL 1 A N
    public function detallepedidos()
    {
        return $this->hasMany('App\DetallePedido');
    }

    //RELACION NORMAL 1 A N
    public function costodeliverys()
    {
        return $this->hasMany('App\CostoDelivery');
    }
    //use HasFactory;
}
