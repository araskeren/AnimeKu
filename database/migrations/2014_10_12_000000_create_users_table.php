<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',50)->unique();
            $table->string('nama');
            $table->string('email',50)->unique();
            $table->string('password');
            $table->integer('level')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
	            'nama' => 'Administrator',
              'username'=>'admin',
	            'email' => 'damis.bachtiar@gmail.com',
	            'password' => bcrypt('admin'),
              'level'=>1,
	       ]);
         DB::table('users')->insert([

         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
