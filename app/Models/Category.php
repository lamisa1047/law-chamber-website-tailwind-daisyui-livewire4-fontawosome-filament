<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    // Fetch all categories ordered alphabetically
    public static function getAll(): Collection
    {
        return static::orderBy('name')->get();
    }

    // Fetch a single category by slug
    public static function getBySlug(string $slug): ?self
    {
        return static::where('slug', $slug)->first();
    }

    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, 'blogs');
    }
}
