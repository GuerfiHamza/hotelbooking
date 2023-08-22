<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Websitesetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'bg_color',
        'bg_secondary_color',
        'button_color',
        'button_hover_color',
];
}
