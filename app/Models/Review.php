<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['villa_id', 'user_id', 'comment', 'rating'];
    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
