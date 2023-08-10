<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VillaAvailability extends Model
{
    use HasFactory;

    protected $fillable = ['villa_id', 'from_date', 'to_date'];
    public function villa(): BelongsTo
    {
        return $this->belongsTo(Villa::class);
    }
}
