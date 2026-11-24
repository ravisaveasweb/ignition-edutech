<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityFacility extends Model
{
    protected $fillable = [
        'university_id',
        'name',
        'description',
        'icon',
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
