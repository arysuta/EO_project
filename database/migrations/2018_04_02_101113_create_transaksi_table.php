<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('promo_id')->unsigned();
            $table->dateTime('tanggal_pesan')->useCurrent();
            $table->enum('jenis_bank',array('bni','bri','mandiri', 'bca'));
            $table->string('no_rek');
            $table->string('atasnama');
            $table->enum('status',array('waiting','decline','done'));
            $table->string('bukti_bayar')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
