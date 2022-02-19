<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndPositionColumnToMasterqualifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masterqualifications', function (Blueprint $table) {
            $table->boolean('status')->default(false)->after('qualifications');
            $table->integer('position')->default(0)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masterqualifications', function (Blueprint $table) {
            //
        });
    }
}
