<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyIndiaUser extends Model
{
    protected $table = 'study_india_users';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'city',
        'course_interested',
        'is_verified',
        'is_active',
        'deactivated_at',
        'email_notifications',
        'otp_hash',
        'otp_expires_at',
        'otp_sent_at',
        'otp_attempts',
    ];

    protected $hidden = [
        'otp_hash',
    ];

    protected function casts(): array
    {
        return [
            'is_verified' => 'boolean',
            'is_active' => 'boolean',
            'email_notifications' => 'boolean',
            'deactivated_at' => 'datetime',
            'otp_expires_at' => 'datetime',
            'otp_sent_at' => 'datetime',
            'otp_attempts' => 'integer',
        ];
    }
}
