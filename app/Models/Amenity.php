<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = [
    'name', 'icon',
];

public function villas(): BelongsToMany
    {
        return $this->belongsToMany(Villa::class);
    }

}
