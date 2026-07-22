<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TickerMessage extends Model
{
    protected $fillable = ['message', 'is_active', 'sort_order'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
