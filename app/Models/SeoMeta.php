<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    protected $fillable = [
        'university_id',
        'title',
        'description',
        'keywords',
        'canonical_url',
        'og_title',
        'og_description',
        'og_image',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
