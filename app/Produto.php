<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function produtos(){
        return $this->belongsTomany('App/Produto','pedido_produtos')->withPivot('quantidade');
    }
    public function client(){
        return $this->belongsTo('App/categoria');
    }
}

