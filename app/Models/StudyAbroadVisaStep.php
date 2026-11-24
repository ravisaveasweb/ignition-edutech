<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadVisaStep extends Model
{
    protected $table = 'study_abroad_visa_steps';

    protected $fillable = [
        'visa_guide_id',
        'step_number',
        'title',
        'description',
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