<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function Promo(){
    return $this->belongsTo('App\Promo');
    }

    public function User(){
    return $this->belongsTo('App\User');
    }
}
