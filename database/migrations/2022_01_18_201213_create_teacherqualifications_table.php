<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherqualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherqualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teacherdetails');
            $table->string('qualification_name')->nullable();
            $table->string('qualification_year')->nullable();
            $table->string('total_marks')->nullable();
            $table->string('marks_obtained')->nullable();
            $table->string('Rank')->nullable();
            $table->string('Remarks')->nullable();
         
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
        Schema::dropIfExists('teacherqualifications');
    }
}
