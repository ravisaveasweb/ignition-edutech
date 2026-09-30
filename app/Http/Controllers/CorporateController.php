<?php

namespace App\Http\Controllers;

use App\Data\ProgramsData;
use Illuminate\View\View;

class CorporateController extends Controller
{
    public function education(): View
    {
        return view('corporate.corporate-education', [
            'page' => ProgramsData::corporateEducation(),
        ]);
    }

    public function training(): View
    {
        return view('corporate.corporate-training', [
            'page' => ProgramsData::corporateTraining(),
        ]);
    }

    public function recruitment(): View
    {
        return view('corporate.corporate-recruitment', [
            'page' => ProgramsData::corporateRecruitment(),
        ]);
    }
}
