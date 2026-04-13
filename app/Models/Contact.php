<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'whatsapp',
        'facebook',
        'linkedin',
        'twitter',
        'instagram',
        'full_address',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'latitude'  => 'float',
        'longitude' => 'float',
    ];

    // Fetch the single contact row (singleton settings table)
    public static function getData(): self
    {
        return static::first() ?? new static();
    }

    // Return Google Maps embed URL from lat/lng
    public function getMapEmbedUrl(): ?string
    {
        if (!$this->latitude || !$this->longitude) {
            return null;
        }

        return "https://maps.google.com/maps?q={$this->latitude},{$this->longitude}&output=embed";
    }

    // Return Google Maps directions URL
    public function getDirectionsUrl(): ?string
    {
        if (!$this->latitude || !$this->longitude) {
            return null;
        }

        return "https://www.google.com/maps/dir/?api=1&destination={$this->latitude},{$this->longitude}";
    }

    public function getEmbedMapUrl(): ?string
    {
        if (!$this->latitude || !$this->longitude) {
            return null;
        }

        return "https://www.google.com/maps?q={$this->latitude},{$this->longitude}&hl=es;z=14&output=embed";
    }
}
