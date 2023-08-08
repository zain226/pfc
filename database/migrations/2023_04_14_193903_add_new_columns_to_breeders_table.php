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
            $table->boolean('show_email')->default(1)->after('banned');
            $table->boolean('show_phone')->default(1)->after('show_email');
            $table->boolean('show_address')->default(0)->after('show_phone');
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
