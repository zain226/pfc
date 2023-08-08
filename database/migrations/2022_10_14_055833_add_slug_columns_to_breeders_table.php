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
        Schema::table('breeders', function (Blueprint $table) {
            $table->string('name_slug')->nullable()->after('name');
            $table->string('kennel_slug')->nullable()->after('kennel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breeders', function (Blueprint $table) {
            //
        });
    }
};
