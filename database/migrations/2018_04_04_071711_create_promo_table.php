<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('promo');
            $table->integer('kategori_id')->nullable();
            $table->string('lokasi')->nullable();
            $table->double('harga_book')->nullable();
            $table->text('deskripsi')->nullable();
            $table->double('Harga')->nullable();
            $table->enum('stat',['on','off'])->nullable();
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
        //
    }
}
