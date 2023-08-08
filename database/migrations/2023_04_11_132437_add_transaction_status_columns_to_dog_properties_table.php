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
        Schema::table('cat_properties', function (Blueprint $table) {
            $table->boolean('single_cat')->default(0)->after('suspend');
            $table->boolean('other_kennel')->default(0)->after('single_cat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cat_properties', function (Blueprint $table) {
            //
        });
    }
};
