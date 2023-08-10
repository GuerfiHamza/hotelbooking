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
        Schema::create('seo_settings', function (Blueprint $table) {
        $table->id();
        $table->string('site_title');
        $table->string('meta_description')->nullable();
        $table->string('meta_keywords')->nullable();
        $table->string('meta_robots')->default('index, follow');
        $table->string('og_title')->nullable();
        $table->string('og_description')->nullable();
        $table->string('og_image')->nullable();
        $table->string('twitter_title')->nullable();
        $table->string('twitter_description')->nullable();
        $table->string('twitter_image')->nullable();
        $table->string('canonical_url')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_settings');
    }
};
