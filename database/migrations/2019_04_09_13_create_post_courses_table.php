<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('courseId');
            $table->foreign('courseId')->references('id')->on('courses');
            $table->unsignedBigInteger('postId');
            $table->foreign('postId')->references('id')->on('posts');
            $table->boolean('active');
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
        Schema::dropIfExists('post_courses');
    }
}
