<?php

namespace App\Models;

use App\Traits\CleansUpImages;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
{

    use CleansUpImages;

    protected static array $imageFields = ['image'];

    protected $fillable = [
        'image',
        'name',
        'title',
        'working_area',
        'experience',
        'practice_areas',
        'about',
        'credentials',
        'email',
        'phone',
        'whatsapp',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'credentials' => 'array',
        'is_active'   => 'boolean',
        'practice_areas' => 'array',
    ];

    // Fetch all active attorneys ordered by sort_order
    public static function getAllActive(): Collection
    {
        return static::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }

    // Fetch a single attorney by id
    public static function getById(int $id): ?self
    {
        return static::where('is_active', true)
            ->find($id);
    }

    // Return practice_areas as an array for easy looping in Blade
    public function getPracticeAreasArray(): array
    {
        if (!$this->practice_areas) {
            return [];
        }

        return array_map('trim', explode(',', $this->practice_areas));
    }
}
