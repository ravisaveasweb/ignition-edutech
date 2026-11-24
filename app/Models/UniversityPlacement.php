<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityPlacement extends Model
{
    protected $fillable = [
        'university_id',
        'year',
        'average_package',
        'highest_package',
        'placement_percentage',
        'description',
        'status',
    ];

    protected $casts = [
        'average_package' => 'decimal:2',
        'highest_package' => 'decimal:2',
        'placement_percentage' => 'decimal:2',
        'status' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
