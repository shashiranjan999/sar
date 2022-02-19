<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // `id`, `name`, `districtid`, `state_id`, `description`, `status`
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('state_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('state_id')->references('id')->on('states');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('cities');
    }
}
