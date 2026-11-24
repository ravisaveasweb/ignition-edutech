<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StudyAbroadUniversity extends Model
{

    protected $table = 'study_abroad_universities';

    protected $fillable = [
        'country',
        'university_name',
        'description',
        'website',
        'logo',
        'status',
    ];
}
