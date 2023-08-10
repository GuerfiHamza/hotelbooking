<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    use HasFactory;
    protected $fillable = ['site_title', 'meta_description', 'favicon_url', 'meta_keywords', 'meta_robots', 'og_title', 'og_description', 'og_image', 'twitter_title', 'twitter_description', 'twitter_image', 'canonical_url', 'logo_url', 'logo_size'];
}
