<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_list', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_episode')->unsigned();
            $table->foreign('id_episode')->references('id')->on('episode')->onUpdate('cascade')->onDelete('cascade');
            $table->string('server')->nullable();
            $table->string('download')->nullable();
            $table->string('streaming')->nullable();
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
        Schema::dropIfExists('server_list');
    }
}
