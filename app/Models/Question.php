<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Question extends Model
{
    protected $fillable = [
        'user_id', // Retained for legacy records only.
        'author_type',
        'author_id',
        'title',
        'slug',
        'description',
        'category',
        'college_name',
        'status',
        'views',
    ];

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    // Used only to display legacy records that have no mapped author.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
