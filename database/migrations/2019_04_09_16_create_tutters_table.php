<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuttersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutters', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('userId') ;
            $table->foreign('userId')->references('id')->on('users');
            $table->unsignedBigInteger('subjectId');
            $table->foreign('subjectId')->references('id')->on('subjects');
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
        Schema::dropIfExists('tutters');
    }
}
