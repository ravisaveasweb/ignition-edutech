<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudyAbroadVisaGuide extends Model
{
    protected $table = 'study_abroad_visa_guides';

    protected $fillable = [
        'visa_country_id',
        'page_title',
        'overview',
        'processing_time',
        'application_fee',
        'financial_requirement',
        'eligibility',
        'official_website',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadVisaCountry::class,
            'visa_country_id'
        );
    }

    public function steps(): HasMany
    {
        return $this->hasMany(
            StudyAbroadVisaStep::class,
            'visa_guide_id'
        )
        ->where('status', 1)
        ->orderBy('step_number');
    }

    public function documents(): HasMany
    {
        return $this->hasMany(
            StudyAbroadVisaDocument::class,
            'visa_guide_id'
        )
        ->where('status', 1)
        ->orderBy('sort_order');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(
            StudyAbroadVisaFaq::class,
            'visa_guide_id'
        )
        ->where('status', 1)
        ->orderBy('sort_order');
    }
}