<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detgambar extends Model
{
	
    public function Promo(){
    	return $this->belongsTo('App\Promo');
    }
}
