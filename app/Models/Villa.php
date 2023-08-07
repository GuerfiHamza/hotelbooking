<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'bedrooms', 'bathrooms', 'beds', 'amenities', 'facilities', 'price', 'max_guests', 'address', 'city_id', 'main_image', 'images', 'average_rating', 'total_reviews', 'min_stay_nights', 'check_in_time', 'check_out_time', 'latitude', 'longitude', 'is_featured', 'contact_email', 'slug'];
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
