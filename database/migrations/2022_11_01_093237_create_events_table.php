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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->date('event_date')->nullable();
            $table->date('entry_closing_date')->nullable();
            $table->string('judges')->nullable();
            $table->string('year')->nullable();
            $table->string('city')->nullable();
            $table->string('venue')->nullable();
            $table->string('banner')->nullable();
            $table->string('steward')->nullable();
            $table->string('show_category')->nullable();
            $table->boolean('is_closed')->default(0);
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
        Schema::dropIfExists('events');
    }
};
