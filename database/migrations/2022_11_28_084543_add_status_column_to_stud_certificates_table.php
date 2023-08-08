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
        Schema::table('stud_certificates', function (Blueprint $table) {
            $table->enum('status',['in process','on hold','rejected','pending','completed'])->default('pending')->after('is_used');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stud_certificates', function (Blueprint $table) {
            //
        });
    }
};
