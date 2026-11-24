<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyIndiaReview extends Model
{
    protected $table = 'study_india_reviews';

    protected $fillable = [
        // User and college details
        'study_india_user_id',
        'college_name',
        'course',
        'graduation_year',

        // Ratings
        'overall_rating',
        'academics_rating',
        'faculty_rating',
        'placements_rating',
        'infrastructure_rating',
        'campus_life_rating',

        // Review content
        'review_title',
        'review_text',
        'pros',
        'cons',
        'status',

        // Student details
        'student_name',
        'email',
        'country_code',
        'mobile',
        'gender',
        'linkedin',

        // Additional college and course details
        'college_display_name',
        'course_fees',
        'class_size',

        // Class 12 details
        'board_12',
        'score_12',
        'score_type_12',

        // Class 10 details
        'board_10',
        'score_10',
        'score_type_10',

        // Graduation details
        'graduation_course',
        'graduation_score',
        'graduation_score_type',

        // Admission and preferences
        'referral_code',
        'reservation',
        'reservation_type',
        'gdpi',

        // Hostel, placement and internship details
        'hostel',
        'hostel_fees',
        'placements',
        'average_package',
        'internships',

        // Other colleges and complete form data
        'other_colleges',
        'reason_not_chosen',
        'form_details',
    ];

    protected function casts(): array
    {
        return [
            // Integer fields
            'study_india_user_id' => 'integer',
            'graduation_year' => 'integer',
            'overall_rating' => 'integer',
            'academics_rating' => 'integer',
            'faculty_rating' => 'integer',
            'placements_rating' => 'integer',
            'infrastructure_rating' => 'integer',
            'campus_life_rating' => 'integer',
            'class_size' => 'integer',

            // Numeric fields
            'course_fees' => 'decimal:2',
            'score_12' => 'decimal:2',
            'score_10' => 'decimal:2',
            'graduation_score' => 'decimal:2',
            'hostel_fees' => 'decimal:2',
            'average_package' => 'decimal:2',

            // JSON fields
            'other_colleges' => 'array',
            'form_details' => 'array',
        ];
    }
}
