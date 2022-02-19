<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndPositionColumnToMasterspecializations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masterspecializations', function (Blueprint $table) {
            $table->boolean('status')->default(true)->after('specializations');
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
        Schema::table('masterspecializations', function (Blueprint $table) {
            //
        });
    }
}
