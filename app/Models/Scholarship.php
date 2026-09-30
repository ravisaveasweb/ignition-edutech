<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'university_id',
        'name',
        'description',
        'amount',
        'eligibility_criteria',
        'deadline',
        'status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'deadline' => 'date',
        'status' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
