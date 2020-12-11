<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function Promo(){
    	return $this->hasMany('App\Promo');
    }
    //protected $table = 'kategori';
}
