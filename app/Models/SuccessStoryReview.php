<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStoryReview extends Model
{
    protected $table = 'success_story_reviews';

    protected $fillable = [
        'student_name',
        'course_name',
        'college_name',
        'student_image',
        'review_type',
        'review',
        'rating',
        'is_approved',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'is_approved' => 'boolean',
        'status' => 'boolean',
    ];
}
