<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyAbroadPastEducation extends Model
{
    protected $fillable = [
        'application_id',
        'tenth_board',
        'tenth_passing_year',
        'tenth_percentage',
        'tenth_school_name',
        'twelfth_board',
        'twelfth_passing_year',
        'twelfth_percentage',
        'twelfth_school_name',
        'twelfth_specialization',
        'passport',
    ];

    protected $casts = [
        'passport' => 'boolean',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(
            StudyAbroadApplication::class,
            'application_id'
        );
    }
}