<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentDrop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('students');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('firstName',30);
            $table->string('lastName',30);
            $table->enum('gender',
                ['Female', 'Male']);
            $table->date('birthdate');
            $table->string('mailAddress',150);
            $table->integer('phone');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('studentType_id');
            $table->foreign('studentType_id')->references('id')->on('students_types');
            $table->boolean('active');
            $table->timestamps();
        });
    }
}
