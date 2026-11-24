<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityRecruiter extends Model
{
    protected $fillable = [
        'university_id',
        'name',
        'logo',
        'website',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
