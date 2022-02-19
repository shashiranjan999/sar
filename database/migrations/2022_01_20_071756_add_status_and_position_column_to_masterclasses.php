<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndPositionColumnToMasterclasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masterclasses', function (Blueprint $table) {
            $table->boolean('status')->default(true)->after('name');
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
        Schema::table('masterclasses', function (Blueprint $table) {
            //
        });
    }
}
