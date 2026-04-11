<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyInfo extends Model
{
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
