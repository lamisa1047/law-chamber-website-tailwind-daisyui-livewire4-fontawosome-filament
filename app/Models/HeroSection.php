<?php

namespace App\Models;

use App\Traits\CleansUpImages;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use CleansUpImages;

    protected static array $imageFields = ['image'];

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
