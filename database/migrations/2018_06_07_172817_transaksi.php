<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
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
          $table->integer('id_paket')->unsigned();
          $table->foreign('id_paket')->references('id')->on('paket')->onUpdate('cascade')->onDelete('cascade');
          $table->integer('id_user')->unsigned();
          $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
          $table->boolean('status_pembayaran')->unsigned();
          $table->datetime('tanggal_konfirmasi');
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
