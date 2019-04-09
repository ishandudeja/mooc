<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('query',1000);
            $table->integer('courseId')->unsigned();
            $table->foreign('courseId')->references('id')->on('courses');
            $table->integer('createdBy')->unsigned();
            $table->foreign('createdBy')->references('id')->on('users');
            $table->integer('assignTo')->unsigned();
            $table->foreign('assignTo')->references('id')->on('users');
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
        Schema::dropIfExists('posts');
    }
}
