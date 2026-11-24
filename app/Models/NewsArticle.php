<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'excerpt',
        'featured_image',
        'source_name',
        'source_url',
        'source_url_hash',
        'feed_url',
        'published_at',
        'imported_at',
        'status',
        'is_featured',
        'is_trending',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'imported_at' => 'datetime',
            'is_featured' => 'boolean',
            'is_trending' => 'boolean',
        ];
    }
}