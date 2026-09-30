<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'degree',
        'duration',
        'duration_type',
        'eligibility',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function universities()
    {
        return $this->belongsToMany(
            University::class,
            'course_university'
        )->withPivot(['fees', 'seats']);
    }

    public function specializations()
    {
        return $this->belongsToMany(
            Specialization::class,
            'course_specialization'
        );
    }
}
