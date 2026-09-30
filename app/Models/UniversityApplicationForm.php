<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityApplicationForm extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'programme',
        'city',
        'enrollment',
        'message',
        'consent',
    ];
}
