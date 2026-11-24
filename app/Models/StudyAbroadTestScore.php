<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadTestScore extends Model
{
    protected $fillable = [
        'application_id',
        'test_type',
        'test_name',
        'score',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadApplication::class,
            'application_id'
        );
    }
}