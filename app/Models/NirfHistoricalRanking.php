<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NirfHistoricalRanking extends Model
{
    protected $table = 'nirf_historical_rankings';

    protected $fillable = [
        'year',
        'category',
        'institute_id',
        'institute_name',
        'tlr',
        'rpc',
        'go',
        'oi',
        'perception',
        'city',
        'state',
        'score',
        'rank',
        'source_block',
    ];
}