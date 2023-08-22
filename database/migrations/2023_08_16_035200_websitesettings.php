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
        Schema::create('websitesettings', function (Blueprint $table) {
        $table->id();
        $table->string('bg_color')->default('#000000');
        $table->string('bg_secondary_color')->default('#0D0D0D');
        $table->string('button_color')->default('#fde047');
        $table->string('button_hover_color')->default('#facc15');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
