<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category',
        'tags',
        'read_time',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'tags'         => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    // Fetch all published blogs paginated, newest first
    public static function getPaginated(int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->orderByDesc('published_at')
            ->paginate($perPage);
    }

    // Fetch all published blogs by category name
    public static function getByCategory(string $category, int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->where('category', $category)
            ->orderByDesc('published_at')
            ->paginate($perPage);
    }

    // Fetch a single published blog by slug
    public static function getBySlug(string $slug): ?self
    {
        return static::where('is_published', true)
            ->where('slug', $slug)
            ->first();
    }

    // Fetch recent published blogs, excluding the current one
    public static function getRecent(int $limit = 3, ?int $excludeId = null): Collection
    {
        return static::where('is_published', true)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->orderByDesc('published_at')
            ->limit($limit)
            ->get();
    }

    // Fetch all published blogs that contain a specific tag
    public static function getByTag(string $tag, int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->whereJsonContains('tags', $tag)
            ->orderByDesc('published_at')
            ->paginate($perPage);
    }

    // Fetch the featured (latest published) blog
    public static function getFeatured(): ?self
    {
        return static::where('is_published', true)
            ->orderByDesc('published_at')
            ->first();
    }

    // Return tags safely as array even if null
    public function getTagsArray(): array
    {
        return $this->tags ?? [];
    }
}
