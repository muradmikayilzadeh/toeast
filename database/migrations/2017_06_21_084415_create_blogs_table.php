<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->integer('img')->unsigned()->index();
            $table->integer('author')->unsigned()->index();
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::table('blogs', function (Blueprint $table){
            $table->foreign('img')->references('id')->on('imgs');
            $table->foreign('author')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
