<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OnlineContentTableRenameSubjectColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('online_contents', function (Blueprint $table) {
            $table->renameColumn('subject_id', 'subjects_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('online_contents', function (Blueprint $table) {
            $table->renameColumn('subjects_id', 'subject_id');
        });
    }
}
