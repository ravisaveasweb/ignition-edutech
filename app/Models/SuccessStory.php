<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SuccessStory extends Model
{
    protected $fillable = [
        'student_name',
        'slug',
        'college_name',
        'course_name',
        'country',
        'category',
        'student_image',
        'banner_image',
        'designation',
        'company_name',
        'short_description',
        'story_content',
        'rating',
        'is_featured',
        'is_approved',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'is_featured' => 'boolean',
        'is_approved' => 'boolean',
        'status' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function ($story) {
            if (empty($story->slug)) {
                $story->slug = static::generateUniqueSlug($story->student_name);
            }
        });

        static::updating(function ($story) {
            if ($story->isDirty('student_name') && empty($story->slug)) {
                $story->slug = static::generateUniqueSlug($story->student_name);
            }
        });
    }

    private static function generateUniqueSlug(string $name): string
    {
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }
}
