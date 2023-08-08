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
        Schema::create('visiting_judges', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table ->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('designation')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
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
        Schema::dropIfExists('visiting_judges');
    }
};
