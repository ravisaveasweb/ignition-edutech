<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadPersonalDetail extends Model
{
    protected $fillable = [
        'application_id',
        'full_name',
        'email',
        'phone',
        'city',
        'course_interested',
        'start_study',
        'terms_accepted',
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadApplication::class,
            'application_id'
        );
    }
}