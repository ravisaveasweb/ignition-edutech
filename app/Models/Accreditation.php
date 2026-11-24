<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accreditation extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function universities()
    {
        return $this->belongsToMany(
            University::class,
            'accreditation_university'
        );
    }
}
