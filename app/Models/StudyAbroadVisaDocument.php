<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadVisaDocument extends Model
{
    protected $table = 'study_abroad_visa_documents';

    protected $fillable = [
        'visa_guide_id',
        'document_name',
        'description',
        'is_required',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'is_required' => 'boolean',
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