<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class ContentBlock extends Model
{
    protected $fillable = ['key', 'page', 'type', 'value'];

    /**
     * Return the editable value for a block, falling back to the hardcoded
     * default from the view. Auto-registers unseen blocks (pre-filled with
     * the default) so admins always see them in the CMS. Emptying or
     * deleting a block safely restores the original hardcoded text.
     */
    public static function get(string $key, string $default = '', string $type = 'text'): string
    {
        // 5-minute TTL caps staleness from bulk updates/deletes that bypass
        // model events; admin edits via Filament flush instantly (see booted()).
        $blocks = Cache::remember('content-blocks', 300, fn() => static::pluck('value', 'key')->all());

        if (! array_key_exists($key, $blocks)) {
            static::register($key, $default, $type);

            return $default;
        }

        $value = $blocks[$key];

        return ($value !== null && trim($value) !== '') ? $value : $default;
    }

    private static function register(string $key, string $default, string $type): void
    {
        try {
            static::create([
                'key' => $key,
                'page' => explode('.', $key)[0],
                'type' => $type,
                'value' => $default,
            ]);
        } catch (\Throwable) {
            // Table missing (pre-migration) or duplicate race — never break the page.
        }
    }

    protected static function booted(): void
    {
        $flush = fn() => Cache::forget('content-blocks');
        static::saved($flush);
        static::deleted($flush);
    }
}
