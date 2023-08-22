<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    use HasFactory;
    protected $casts = [
        'social_media_links' => 'array',
    ];
    protected $fillable = ['phone', 'email', 'address', 'content', 'social_media_links'];
}
