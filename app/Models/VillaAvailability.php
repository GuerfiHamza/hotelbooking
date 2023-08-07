<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillaAvailability extends Model
{
    use HasFactory;

    protected $fillable = ['villa_id', 'from_date', 'to_date'];
    public function villa()
    {
        return $this->belongsTo(Villa::class);
    }
}
