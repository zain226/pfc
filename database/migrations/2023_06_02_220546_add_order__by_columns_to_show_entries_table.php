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
        Schema::table('show_entries', function (Blueprint $table) {
            $table->string('group_id')->nullable();
            $table->string('class_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('show_entries', function (Blueprint $table) {
            $table->dropColumn(['group_id','class_order']);
        });
    }
};
