<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Villa extends Model
{
    use HasFactory;
    protected $casts = [
        'images' => 'array',
    ];
    protected $fillable = ['name', 'description', 'bedrooms', 'bathrooms', 'beds', 'price', 'max_guests', 'address', 'city_id', 'main_image', 'images', 'average_rating', 'total_reviews', 'min_stay_nights', 'check_in_time', 'check_out_time', 'latitude', 'longitude', 'is_featured', 'contact_email', 'slug', 'seo_title', 'seo_keywords', 'seo_description'];
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Facility::class);
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }
}
