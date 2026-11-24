<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\ApplicationMasterData;


class StudyIndiaController extends Controller
{
    public function locationPage($type, $slug)
    {
        // Allow only city and state
        if (!in_array($type, ['city', 'state'])) {
            return redirect()->route('home');
        }


        // Prepare the expected Blade view name
        $viewName = "study-india.location.{$type}.{$slug}";

        // If the page exists, open it
        if (view()->exists($viewName)) {
            return view($viewName, compact('type', 'slug'));
        }

        // If the page does not exist, go to homepage
        return redirect()->route('home');
    }


    public function universitiesCourses(): View
    {
        $courses = $this->getActiveCourses();
        return view('study-india.universities-courses.index', compact('courses'));
    }

    private function getActiveCourses()
    {
        return ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');
    }
}
