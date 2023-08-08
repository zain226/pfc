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
        Schema::create('selling_cats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_property_id')->constrained('cat_properties');
            $table->foreignId('owner_id')->constrained('owners');
            $table->date('re_publish')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('price')->nullable();
            $table->text('comment')->nullable();
            $table->string('contact')->nullable();
            $table->boolean('is_whatsapp')->default(0);
            $table->enum('status',['active','inactive'])->default('active');
            $table->enum('add_status',['for sale','sold'])->default('for sale');
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
        Schema::dropIfExists('selling_cats');
    }
};
