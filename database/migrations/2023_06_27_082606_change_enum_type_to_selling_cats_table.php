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
      \DB::statement("ALTER TABLE `selling_cats` CHANGE `add_status` `add_status` ENUM('for sale','sold','for stud') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'for sale';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       \DB::statement("ALTER TABLE `selling_cats` CHANGE `add_status` `add_status` ENUM('for sale','sold') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'for sale';");

    }
};
