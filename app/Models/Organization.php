<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
        'logo',
        'hero_image',
        'sort_order',
    ];

    public function members(): HasMany
    {
        // Secondary id sort makes ties in sort_order deterministic (oldest first).
        return $this->hasMany(Member::class)->orderBy('sort_order')->orderBy('id');
    }
}
