<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
        'description',
        'starts_at',
        'ends_at',
        'location',
        'cover_image',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
        ];
    }

    public function getCoverImageUrlAttribute(): string
    {
        if (blank($this->cover_image)) {
            return '/images/PHOTO.jpeg';
        }

        $image = $this->cover_image;

        if (Str::startsWith($image, ['http://', 'https://'])) {
            return $image;
        }

        $normalized = ltrim($image, '/');

        if (Str::startsWith($normalized, 'storage/')) {
            return '/' . $normalized;
        }

        return '/storage/' . $normalized;
    }
}
