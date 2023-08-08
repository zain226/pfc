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
        Schema::create('show_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('breed_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('breeder_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('color_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('gender_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('owner_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('registration_no')->nullable();
            $table->integer('show_id')->nullable();
            $table->string('pet_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('microchip')->nullable();
            $table->string('hair')->nullable();
            $table->string('sire')->nullable();
            $table->string('dam')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->integer('member_id')->nullable();
            $table->string('class')->nullable();
            $table->string('fee_amount')->nullable();
            $table->string('received_by')->nullable();
            $table->string('received_from')->nullable();
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
        Schema::dropIfExists('show_entries');
    }
};
