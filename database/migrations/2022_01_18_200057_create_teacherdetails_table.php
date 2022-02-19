<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('status');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('phone');
            $table->string('email');
            $table->string('alt_phone');
            $table->string('address');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('avability_period');
            $table->string('available_time');
            $table->string('bank_name')->nullable();
            $table->string('bank_number')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('adhar_number')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('bank_account_img')->nullable();
            $table->string('adhar_front_img')->nullable();
            $table->string('adhar_back_img')->nullable();
            $table->string('pancard_img')->nullable();
            $table->string('cv')->nullable();
            

            
            
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
        Schema::dropIfExists('teacherdetails');
    }
}
