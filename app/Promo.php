<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function Kategori(){
        return $this->belongsTo('App\Kategori');
        }

    protected $fillable = [
        'promo',
        'kategori_id',
        'tanggal_dibuat',
        'tanggal_berakhir',
        'Harga',
        'foto'
    ];

    public function Detgambar(){
        return $this->hasMany('App\Detgambar');
    }

        public function Transaksi(){
        return $this->hasMany('App\Transaksi');
    }
}
