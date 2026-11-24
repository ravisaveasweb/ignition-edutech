<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadReview extends Model
{
    protected $table = 'study_abroad_reviews';

    protected $fillable = [
        'study_abroad_user_id',
        'student_name',
        'student_email',
        'student_mobile',
        'university_name',
        'country',
        'course_name',
        'enrollment_year',
        'annual_tuition_fees',
        'reason_for_choice',
        'likes',
        'improvements',
        'advice',
        'academics_rating',
        'placements_support',
        'accommodation_type',
        'campus_jobs',
        'overall_rating',
        'review_headline',
        'form_details',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'enrollment_year' => 'integer',
            'annual_tuition_fees' => 'decimal:2',
            'academics_rating' => 'integer',
            'overall_rating' => 'integer',
            'form_details' => 'array',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadUser::class,
            'study_abroad_user_id'
        );
    }
}
