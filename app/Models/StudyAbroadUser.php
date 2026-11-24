<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudyAbroadUser extends Model
{
    protected $table = 'study_abroad_users';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'city',
        'course_interested',
        'profile_image',
        'is_verified',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_verified' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function applications(): HasMany
    {
        return $this->hasMany(
            StudyAbroadApplication::class,
            'study_abroad_user_id'
        );
    }
}
