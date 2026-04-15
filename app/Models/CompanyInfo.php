<?php

namespace App\Models;

use App\Models\Attorney;
use App\Traits\CleansUpImages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class CompanyInfo extends Model
{

    use CleansUpImages;

    protected static array $imageFields = ['image', 'logo'];

    protected $fillable = [
        'name',
        'logo',
        'image',
        'attorney_id',
        'about_title',
        'about_content',
    ];

    // Fetch the single company info row (singleton settings table)
    public static function getData(): self
    {
        return static::first() ?? new static();
    }

    // Return logo URL with a fallback
    public function getLogoUrl(string $fallback = '/images/logo.png'): string
    {
        return $this->logo ?? $fallback;
    }

    public function attorney(): BelongsTo
    {
        return $this->belongsTo(Attorney::class, 'attorney_id');
    }
}
