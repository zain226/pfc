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
        Schema::create('cat_properties', function (Blueprint $table) {
            $table->id();
            $table->string('pet_pic')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('pet_name')->nullable();
            $table->string('seo_slug')->nullable();
            $table->boolean('status')->default(1);
            $table->date('whelped')->nullable();
            $table->string('dna')->nullable();
            $table->string('hd')->nullable();
            $table->string('ed')->nullable();
            $table->string('foreign_no')->nullable();
            $table->string('date_of_death')->nullable();
            $table->string('registration')->nullable();
            $table->foreignId('breeder_id')->nullable();
            $table->foreignId('owner_id')->nullable();
            $table->foreignId('gender_id')->nullable();
            $table->foreignId('breed_id')->nullable();
            $table->foreignId('color_id')->nullable();
            $table->integer('father')->nullable();
            $table->integer('mother')->nullable();
            $table->string('microchip')->nullable();
            $table->string('sibling_print')->nullable();
            $table->string('line_breeding_print')->nullable();
            $table->string('award')->nullable();
            $table->string('survey')->nullable();
            $table->string('detail_of_liter')->nullable();
            $table->string('hair')->nullable();
            $table->string('survey_period')->nullable();
            $table->string('achievements')->nullable();
            $table->boolean('suspend')->default(0);
            $table->string('mother_last_update')->nullable();
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
        Schema::dropIfExists('cat_properties');
    }
};
