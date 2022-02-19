<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // `districtid`, `district_title`, `state_id`, `district_description`, `district_status`
        Schema::create('districts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->unsignedBigInteger('state_id');
            $table->boolean('status')->default(true);
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('districts');
    }
}
