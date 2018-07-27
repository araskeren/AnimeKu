<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->string('nama_studio');
            $table->integer('suka')->unsigned();
            $table->integer('tidak_suka')->unsigned();
            $table->integer('total_anime')->unsigned();
            $table->timestamps();
        });
        DB::table('studio')->insert([
          'user_id'=>1,
          'nama_studio'=>'J.C Staff',
          'suka'=>200,
          'tidak_suka'=>10,
          'total_anime'=>143,
        ]);
        DB::table('studio')->insert([
          'user_id'=>1,
          'nama_studio'=>'Madhouse',
          'suka'=>200,
          'tidak_suka'=>15,
          'total_anime'=>153,
        ]);
        DB::table('studio')->insert([
          'user_id'=>1,
          'nama_studio'=>'P.A Works',
          'suka'=>200,
          'tidak_suka'=>40,
          'total_anime'=>53,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studio');
    }
}
