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
        Schema::create('villa_availabilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('villa_id');
            $table->date('from_date');
            $table->date('to_date');
            $table->timestamps();

            $table->foreign('villa_id')->references('id')->on('villas');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villa_availabilities');
    }
};
