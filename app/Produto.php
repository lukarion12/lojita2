<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function produtos(){
        return $this->belongsToMany('App\Pedido','pedido_produtos')->withPivot('quantidade');
    }
    public function client(){
        return $this->belongsTo('App\Categoria');
    }
}

