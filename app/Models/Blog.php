<?php

namespace App\Models;

use App\Traits\CleansUpImages;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{

    use CleansUpImages;

    protected static array $imageFields = ['image'];

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
        'tags',
        'read_time',
        'is_published',
        'created_at',
    ];

    protected $casts = [
        'tags'         => 'array',
        'is_published' => 'boolean',
        'created_at' => 'datetime',
    ];

    public static function getPaginated(?string $category = null, int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->when($category, function ($query) use ($category) {
                $query->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->with('category')
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    // Fetch all published blogs by category name
    public static function getByCategory(string $category, int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })
            ->with('category') // eager load properly
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    // Fetch a single published blog by slug
    public static function getBySlug(string $slug): ?self
    {
        return static::where('is_published', true)
            ->with('category')
            ->where('slug', $slug)
            ->first();
    }

    // Fetch recent published blogs, excluding the current one
    public static function getRecent(int $limit = 3, ?int $excludeId = null): Collection
    {
        return static::where('is_published', true)
            ->when($excludeId, fn($q) => $q->where('id', '!=', $excludeId))
            ->orderByDesc('created_at')
            ->limit($limit)
            ->get();
    }

    // Fetch all published blogs that contain a specific tag
    public static function getByTag(string $tag, int $perPage = 9): LengthAwarePaginator
    {
        return static::where('is_published', true)
            ->whereJsonContains('tags', $tag)
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    // Fetch the featured (latest published) blog
    public static function getFeatured(): ?self
    {
        return static::where('is_published', true)
            ->orderByDesc('created_at')
            ->first();
    }

    // Return tags safely as array even if null
    public function getTagsArray(): array
    {
        return $this->tags ?? [];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
