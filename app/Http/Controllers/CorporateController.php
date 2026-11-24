<?php

namespace App\Http\Controllers;

use App\Data\ProgramsData;
use Illuminate\View\View;
use App\Models\ApplicationMasterData;


class CorporateController extends Controller
{
    public function education(): View
    {

        $courses = $this->getActiveCourses();
        return view('corporate.corporate-education', [
            'page' => ProgramsData::corporateEducation(),
            'courses' => $courses,
        ]);
    }

    public function training(): View
    {
        $courses = $this->getActiveCourses();
        return view('corporate.corporate-training', [
            'page' => ProgramsData::corporateTraining(),
            'courses' => $courses,
        ]);
    }

    public function recruitment(): View
    {

        $courses = $this->getActiveCourses();
        return view('corporate.corporate-recruitment', [
            'page' => ProgramsData::corporateRecruitment(),
            'courses' => $courses,
        ]);
    }

    private function getActiveCourses()
    {
        return ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');
    }
}
