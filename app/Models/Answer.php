<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Answer extends Model
{
    protected $fillable = [
        'question_id',
        'user_id', // Retained for legacy records only.
        'author_type',
        'author_id',
        'body',
        'helpful_count',
        'is_accepted',
    ];

    protected function casts(): array
    {
        return [
            'is_accepted' => 'boolean',
        ];
    }

    public function author(): MorphTo
    {
        return $this->morphTo();
    }

    // Used only for legacy records that still have a user_id.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
