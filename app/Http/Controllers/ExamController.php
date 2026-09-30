<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\StudyAbroadUniversity;

class ExamController extends Controller
{
    public function show($slug)
    {
        $exam = Exam::with('sections')
            ->where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();

        $studyAbroadUniversities = StudyAbroadUniversity::where('status', true)
            ->get()
            ->groupBy('country');

        return view('exams.show', compact(
            'exam',
            'studyAbroadUniversities'
        ));
    }
}