<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'title',
        'subtitle',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Fetch all active gallery items ordered by sort_order
    public static function getAllActive(): Collection
    {
        return static::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }
}
