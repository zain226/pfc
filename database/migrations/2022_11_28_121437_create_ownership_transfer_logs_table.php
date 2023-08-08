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
        Schema::create('ownership_transfer_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_property_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('old_owner')->nullable();
            $table->string('new_owner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ownership_transfer_logs');
    }
};
