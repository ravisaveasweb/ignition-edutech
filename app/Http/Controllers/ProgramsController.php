<?php

namespace App\Http\Controllers;

use App\Data\ProgramsData;
use Illuminate\View\View;

class ProgramsController extends Controller
{
    public function undergraduate(): View
    {
        return view('programs.online-undergraduate', [
            'page' => ProgramsData::undergraduate(),
        ]);
    }

    public function mba(): View
    {
        return view('programs.online-mba', [
            'page' => ProgramsData::mba(),
        ]);
    }

    public function executive(): View
    {
        return view('programs.executive-program', [
            'page' => ProgramsData::executive(),
        ]);
    }
}
