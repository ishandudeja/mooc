<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger('studentTypeId');
            $table->foreign('studentTypeId')->references('id')->on('students_types');
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
        Schema::dropIfExists('students');
    }
}
