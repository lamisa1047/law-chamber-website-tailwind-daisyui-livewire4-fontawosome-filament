<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'image',
    ];

    // Fetch the single hero section row (singleton settings table)
    public static function getData(): self
    {
        return static::first() ?? new static();
    }
}
