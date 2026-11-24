<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityAdmission extends Model
{
    protected $fillable = [
        'university_id',
        'title',
        'description',
        'eligibility',
        'admission_process',
        'start_date',
        'end_date',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
