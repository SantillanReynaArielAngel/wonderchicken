<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regalo extends Model
{
    //RELACION NORMAL 1 A N
    public function promociones()
    {
        return $this->hasMany('App\Promocion');
    }

    //use HasFactory;
}
