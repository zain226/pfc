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
        Schema::create('single_cat_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('breed_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('breeder_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('owner_id')->nullable()->constrained()->onDelete('cascade');
            $table->date('whelped')->nullable();
            $table->string('pet_name')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->string('hair')->nullable();
            $table->enum('status',['in process','on hold','rejected','pending','completed'])->default('pending');
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
        Schema::dropIfExists('single_cat_registrations');
    }
};
