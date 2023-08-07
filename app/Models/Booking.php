<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
    'villa_id', 'user_id', 'check_in_date', 'check_out_date', 'guests',
    'total_amount', 'payment_intent_id', 'status',
];
}
