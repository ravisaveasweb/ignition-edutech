<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalScholarshipData extends Model
{
    protected $table = 'global_scholarship_data';

    protected $fillable = [
        'scholarship_id',
        'scholarship_name',
        'provider',
        'target_groups',
        'subject_areas',
        'eligible_countries',
        'study_purpose',
        'description_en',
        'host_country',
        'scholarship_amount',
        'degree_level',
        'duration',
    ];
}