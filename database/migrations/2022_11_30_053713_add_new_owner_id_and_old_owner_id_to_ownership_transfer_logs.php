<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ownership_transfer_logs', function (Blueprint $table) {
            $table->integer('new_owner_id')->nullable()->after('cat_property_id');
            $table->integer('old_owner_id')->nullable()->after('new_owner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ownership_transfer_logs', function (Blueprint $table) {
            //
        });
    }
};
