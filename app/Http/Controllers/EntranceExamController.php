<?php

namespace App\Http\Controllers;

class EntranceExamController extends Controller
{
    public function index()
    {
        $exams = collect(config('entrance_exam', []))
            ->values()
            ->all();

        return view('entrance-exam.entrance-exam', compact('exams'));
    }

    public function details($slug)
    {
        $exams = collect(config('entrance_exam', []));

        $exam = $exams->firstWhere('slug', $slug);

        abort_if(!$exam, 404);

        $exam['exam_name'] = $exam['full_name']
            ?? $exam['name']
            ?? 'Entrance Exam';

        $exam['short_name'] = $exam['name']
            ?? 'Exam Details';

        $exam['conducting_body'] = $exam['conducting_authority']
            ?? 'Not available';

        $exam['exam_level'] = $exam['level']
            ?? 'Not specified';

        $exam['course_name'] = $exam['course_name']
            ?? $exam['category']
            ?? 'Not specified';

        $exam['overview'] = $exam['overview']
            ?? $exam['description']
            ?? '';

        $exam['duration'] = $exam['duration']
            ?? 'Check official notification';

        return view(
            'entrance-exam.entrance-exam-details',
            compact('exam')
        );
    }
}