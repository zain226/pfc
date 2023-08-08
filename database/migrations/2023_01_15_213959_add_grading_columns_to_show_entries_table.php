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
            $table->string('grade')->nullable()->after('received_from');
            $table->string('award')->nullable()->after('grade');
            $table->string('position')->nullable()->after('award');
            $table->integer('best_in_group')->nullable()->after('position');
            $table->integer('best_in_show')->nullable()->after('best_in_group');
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
            //
        });
    }
};
