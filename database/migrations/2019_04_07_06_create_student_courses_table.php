<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('sessionStart');
            $table->date('sessionEnd');
            $table->double('fee', 8,
                2);
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->references('id')->on('students');
            $table->unsignedBigInteger('courseId');
            $table->foreign('courseId')->references('id')->on('courses');
            $table->integer('rating');
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
        Schema::dropIfExists('student_courses');
    }
}
