<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    //RELACION NORMAL INVERSO 1 A N 
    public function presa()
    {
        return $this->belongsTo('App\Presa');
    }

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

    //RELACION NORMAL INVERSO 1 A N
    public function articulo()
    {
        return $this->belongsTo('App\Articulo');
    }
   // use HasFactory;
}
