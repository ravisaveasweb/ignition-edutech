<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    protected $table="student_wishlist";
}
