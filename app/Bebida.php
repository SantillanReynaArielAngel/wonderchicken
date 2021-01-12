<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
     //RELACION NORMAL POLIMORFICA 1 A 1
     public function articulo()
     {
         return $this->morphOne('App\Articulo', 'articuloable');
     }
     
    //use HasFactory;
}
