<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudyAbroadApplication extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'otp_verified',
        'status',
    ];

    protected $casts = [
        'otp_verified' => 'boolean',
    ];

    public function personalDetails(): HasOne
    {
        return $this->hasOne(
            StudyAbroadPersonalDetail::class,
            'application_id'
        );
    }

    public function educationPreference(): HasOne
    {
        return $this->hasOne(
            StudyAbroadEducationPreference::class,
            'application_id'
        );
    }

    public function testScores(): HasMany
    {
        return $this->hasMany(
            StudyAbroadTestScore::class,
            'application_id'
        );
    }

    public function pastEducation(): HasOne
    {
        return $this->hasOne(
            StudyAbroadPastEducation::class,
            'application_id'
        );
    }

    public function otpVerifications(): HasMany
    {
        return $this->hasMany(
            OtpVerification::class,
            'application_id'
        );
    }
}