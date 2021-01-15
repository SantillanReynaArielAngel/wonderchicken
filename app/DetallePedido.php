<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $fillable = [
        'cantidad', 'pedido_id', 'articulo_id', 'promocion_id',
    ];
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
