<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anime')->unsigned();
            $table->foreign('anime')->references('id')->on('anime')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('episode')->unsigned();
            $table->foreign('episode')->references('id')->on('episode')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('user')->unsigned();
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade');
            $table->longText('komentar');
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
        Schema::dropIfExists('komentar');
    }
}
