<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $primaryKey = 'id_transaksi';
	protected $table = 'transaksi';
    protected $fillable = ['created_at','updated_at','id','id_kategori','paket','harga'];
}
