<?php

namespace App\Http\Controllers;

use App\Models\ApplicationMasterData;
use App\Data\ProgramsData;
use Illuminate\View\View;

class ProgramsController extends Controller
{
    public function undergraduate(): View
    {
                $courses = $this->getActiveCourses();

        return view('programs.online-undergraduate', [
            'page' => ProgramsData::undergraduate(),
               'courses' => $courses,
        ]);
    }

    public function mba(): View
    {
          $courses = $this->getActiveCourses();
        return view('programs.online-mba', [
            'page' => ProgramsData::mba(),
             'courses' => $courses,
            
        ]);
    }

    public function executive(): View
    {
        return view('programs.executive-program', [
            'page' => ProgramsData::executive(),
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
