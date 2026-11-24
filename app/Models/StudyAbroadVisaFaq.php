<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadVisaFaq extends Model
{
    protected $table = 'study_abroad_visa_faqs';

    protected $fillable = [
        'visa_guide_id',
        'question',
        'answer',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function visaGuide(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadVisaGuide::class,
            'visa_guide_id'
        );
    }
}