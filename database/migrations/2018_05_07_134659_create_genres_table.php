<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('genre');
            $table->timestamps();
        });
        DB::table('genre')->insert([
          'genre'=>'Comedy',
        ]);
        DB::table('genre')->insert([
          'genre'=>'Romance',
        ]);
        DB::table('genre')->insert([
          'genre'=>'Action',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre');
    }
}
