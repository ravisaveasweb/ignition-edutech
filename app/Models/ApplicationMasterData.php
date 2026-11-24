<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationMasterData extends Model
{
    protected $table = 'application_master_data';

    protected $fillable = [
        'type',
        'name',
        'status',
    ];
}