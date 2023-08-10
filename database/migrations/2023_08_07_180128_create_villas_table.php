<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('beds');
            $table->decimal('price', 10, 2);
            $table->integer('max_guests');
            $table->string('address');
            $table->unsignedBigInteger('city_id');
            $table->string('main_image');
            $table->json('images');
            $table->integer('min_stay_nights');
            $table->time('check_in_time');
            $table->time('check_out_time');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->boolean('is_featured')->default(false);
            $table->string('slug')->unique();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
