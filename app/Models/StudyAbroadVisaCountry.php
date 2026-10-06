<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class StudyAbroadVisaCountry extends Model
{
    protected $table = 'study_abroad_visa_countries';

    protected $fillable = [
        'country',
        'country_code',
        'flag',
        'visa_name',
        'short_description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function visaGuide(): HasOne
    {
        return $this->hasOne(
            StudyAbroadVisaGuide::class,
            'visa_country_id'
        );
    }
}