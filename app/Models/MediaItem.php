<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $fillable = ['type', 'title', 'file_path', 'youtube_id', 'sort_order'];
}
