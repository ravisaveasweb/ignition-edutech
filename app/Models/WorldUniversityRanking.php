<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorldUniversityRanking extends Model
{
    protected $table = 'world_university_rankings';

    protected $fillable = [
        'rank_2026',
        'previous_rank',
        'institution_name',
        'country',
        'region',
        'status',
        'ar_score',
        'ar_rank',
        'er_score',
        'er_rank',
        'fsr_score',
        'fsr_rank',
        'cpf_score',
        'cpf_rank',
        'ifr_score',
        'ifr_rank',
        'isr_score',
        'isr_rank',
        'isd_score',
        'isd_rank',
        'irn_score',
        'irn_rank',
        'eo_score',
        'eo_rank',
        'sus_score',
        'sus_rank',
        'overall_score',
    ];
}