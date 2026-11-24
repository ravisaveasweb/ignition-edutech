<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\StudyAbroadUniversity;
use App\Models\ApplicationMasterData;


class ExamController extends Controller
{

    public function index()
    {
        $exams = Exam::where('status', true)
            ->orderBy('id')
            ->get();
        $courses = $this->getActiveCourses();
        return view('exams.index', compact('exams', 'courses'));
    }

    public function show($slug)
    {

        $allExams = Exam::where('status', 1)
            ->orderBy('name')
            ->get();

        $exam = Exam::with('sections')
            ->where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();

        $studyAbroadUniversities = StudyAbroadUniversity::where('status', true)
            ->get()
            ->groupBy('country');

        return view('exams.show', compact(
            'exam',
            'studyAbroadUniversities',
            'allExams'
        ));
    }


    private function getActiveCourses()
    {
        return ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');
    }
}
