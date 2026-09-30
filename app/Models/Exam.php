<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Exam extends Model
{
    
 protected $fillable = [
        'name',
        'slug',
        'full_name',
        'exam_type',
        'conducted_by',
        'duration',
        'mode',
        'score_range',
        'validity',
        'application_fee',
        'official_website',
        'short_description',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'application_fee' => 'decimal:2',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(ExamSection::class)
            ->orderBy('sort_order');
    }
}
