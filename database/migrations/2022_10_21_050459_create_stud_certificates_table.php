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
        Schema::create('stud_certificates', function (Blueprint $table) {
            $table->id();
            $table->integer('sire_owner_id')->nullable();
            $table->integer('dame_owner_id')->nullable();
            $table->integer('sire_id')->nullable();
            $table->integer('dame_id')->nullable();
            $table->integer('breed_id')->nullable();
            $table->date('mating_date')->nullable();
            $table->boolean('is_verified')->default(1);
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
        Schema::dropIfExists('stud_certificates');
    }
};
