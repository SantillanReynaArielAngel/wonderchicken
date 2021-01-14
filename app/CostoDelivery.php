<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostoDelivery extends Model
{

     //RELACION NORMAL 1 A N
     public function ubicacions()
     {
         return $this->hasMany('App\Ubicacion');
     }

    
    //use HasFactory;
}
