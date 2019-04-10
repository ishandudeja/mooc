<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('subjectId');
            $table->foreign('subjectId')->references('id')->on('subjects');
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
        Schema::dropIfExists('post_subjects');
    }
}
