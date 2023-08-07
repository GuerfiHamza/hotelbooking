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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('villa_id');
            $table->unsignedBigInteger('user_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('guests');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_intent_id')->nullable(); // Stripe payment intent ID
            $table->string('status')->default('pending'); // Booking status: pending, confirmed, canceled, etc.
            $table->timestamps();

            $table->foreign('villa_id')->references('id')->on('villas');
            $table->foreign('user_id')->references('id')->on('users');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
