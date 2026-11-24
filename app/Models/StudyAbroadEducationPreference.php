<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadEducationPreference extends Model
{
    protected $fillable = [
        'application_id',
        'gender',
        'preferred_destination',
        'specialization',
        'interested_university',
        'english_test_status',
        'entrance_exam_status',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadApplication::class,
            'application_id'
        );
    }
}