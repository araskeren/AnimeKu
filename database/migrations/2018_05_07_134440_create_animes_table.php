<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul');
            $table->string('judul_alternatif')->nullable();
            $table->integer('studio_id')->unsigned()->nullable();;
            $table->foreign('studio_id')->references('id')->on('studio')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('durasi')->unsigned()->nullable();
            $table->integer('episode')->unsigned()->nullable();
            $table->date('tanggal_tayang')->nullable();
            $table->date('tanggal_end')->nullable();
            $table->string('type')->nullable();
            $table->string('sumber')->nullable();
            $table->string('musim')->nullable();
            $table->string('status')->nullable();
            $table->string('produser')->nullable();
            $table->string('licensor')->nullable();
            $table->string('broadcast')->nullable();
            $table->string('cover')->nullable();
            $table->text('sinopsis')->nullable();
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
        Schema::dropIfExists('anime');
    }
}
