<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('title');
            $table->string('sumber')->nullable();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_tag')->unsigned();
            
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('post');
    }
}
