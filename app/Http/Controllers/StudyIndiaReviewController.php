<?php

namespace App\Http\Controllers;

use App\Models\StudyIndiaReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Models\NirfHistoricalRanking;

class StudyIndiaReviewController extends Controller
{
    /**
     * Display approved reviews.
     */
    public function index()
    {
        $reviews = StudyIndiaReview::where('status', 'approved')
            ->latest()
            ->paginate(10);

        $totalReviews = StudyIndiaReview::where('status', 'approved')
            ->count();

        $averageRating = StudyIndiaReview::where('status', 'approved')
            ->avg('overall_rating');
            

        return view('study-india.reviews.index', compact(
            'reviews',
            'totalReviews',
            'averageRating'
        ));
    }

    

    /**
     * Display the review form.
     */
    public function create()
    {

    $colleges = NirfHistoricalRanking::query()
    ->whereNotNull('institute_name')
      ->where('institute_name', '<>', '')
      ->select('institute_name')
      ->distinct()
      ->orderBy('institute_name')
      ->pluck('institute_name');

      

       // Fetch courses from the data folder

       $courseData = require app_path('Data/study_india_coursesData.php');
       $courses = $courseData['courses'] ?? [] ;

        return view('study-india.reviews.write-review', [
            'searchTerm' => request('searchTerm'),
            'colleges' => $colleges,
            'courses' => $courses,
        ]);
    }

    /**
     * Save a review submitted by an authenticated Study India user.
     */
    public function store(Request $request)
    {
        // 1. Check the Study India session.
        $userId = $request->session()->get('study_india_user_id');

        if (!$userId) {
            return redirect('/study-india/login')
                ->with('error', 'Please log in to submit a review.');
        }

        // 2. Ensure the account is active and verified.
        $user = DB::table('study_india_users')
            ->where('id', $userId)
            ->where('is_active', true)
            ->where('is_verified', true)
            ->first();

        if (!$user) {
            $request->session()->forget('study_india_user_id');

            return redirect('/study-india/login')
                ->with('error', 'Please log in with an active, verified Study India account.');
        }

        // 3. Validate the field names used by your existing Blade form.
        $validated = $request->validate([
           
'college' => [
    'required',
    'string',
    'max:255',
    'regex:/^[\p{L}][\p{L}\s.,&()\'-]*$/u',
],

'course' => [
    'required',
    'string',
    'max:255',
    'regex:/^[\p{L}][\p{L}\s.,&()\'-]*$/u',
],

'name' => [
    'required',
    'string',
    'max:100',
    'regex:/^[\p{L}][\p{L}\s.\'-]*$/u',
],

'email' => ['required', 'email', 'max:255'],

'countryCode' => ['required', 'string', 'max:8'],

'mobile' => [
    'required',
    'regex:/^[0-9]{10}$/',
],

            'gender' => [
                'required',
                Rule::in([
                    'Female',
                    'Male',
                    'Non-binary',
                    'Prefer not to say',
                ]),
            ],

            'linkedin' => ['nullable', 'url', 'max:255'],
            'referral' => ['nullable', 'string', 'max:100'],

            'admissionYear' => [
                'required',
                'integer',
                'min:1950',
                'max:' . (date('Y') + 6),
            ],

            'courseFees' => ['required', 'numeric', 'min:0'],
            'classSize' => ['required', 'integer', 'min:1'],

            'board12' => ['nullable', 'string', 'max:255'],
            'score12' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'scoreType12' => [
                'nullable',
                Rule::in(['Percentage', 'CGPA']),
            ],

            'board10' => ['nullable', 'string', 'max:255'],
            'score10' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'scoreType10' => [
                'nullable',
                Rule::in(['Percentage', 'CGPA']),
            ],

            'graduationCourse' => ['nullable', 'string', 'max:255'],
            'graduationScore' => [
                'nullable',
                'numeric',
                'min:0',
                'max:100',
            ],
            'graduationScoreType' => [
                'nullable',
                Rule::in(['Percentage', 'CGPA']),
            ],

            'collegeDisplayName' => ['nullable', 'string', 'max:255'],

            'reservation' => [
                'nullable',
                Rule::in(['Yes', 'No']),
            ],
            'reservationType' => [
                'nullable',
                Rule::in(['SC', 'ST', 'OBC', 'EWS', 'Other']),
            ],
            'gdpi' => ['nullable', Rule::in(['Yes', 'No'])],

            'hostel' => ['nullable', Rule::in(['Yes', 'No'])],
            'hostelFees' => ['nullable', 'numeric', 'min:0'],

            'placements' => ['nullable', Rule::in(['Yes', 'No'])],
            'averagePackage' => ['nullable', 'numeric', 'min:0'],

            'internships' => ['nullable', Rule::in(['Yes', 'No'])],

            'otherCollege' => ['nullable', 'array'],
            'otherCollege.*' => ['nullable', 'string', 'max:255'],
            'otherCourse' => ['nullable', 'array'],
            'otherCourse.*' => ['nullable', 'string', 'max:255'],

            'reasonNotChosen' => ['nullable', 'string', 'max:5000'],

            'overallRating' => [
                'required',
                'integer',
                'between:1,5',
            ],

            'review' => [
                'required',
                'string',
                'min:30',
                'max:5000',
            ],

            'consent' => ['accepted'],
        ]);

        // 4. Prepare the additional form data for storage.
        $otherColleges = [];

        $collegeNames = $validated['otherCollege'] ?? [];
        $otherCourses = $validated['otherCourse'] ?? [];

        foreach ($collegeNames as $index => $collegeName) {
            $collegeName = trim((string) $collegeName);
            $otherCourse = trim((string) ($otherCourses[$index] ?? ''));

            if ($collegeName !== '' || $otherCourse !== '') {
                $otherColleges[] = [
                    'college' => $collegeName,
                    'course' => $otherCourse,
                ];
            }
        }

        // Store the full form payload, including academic fields.
        $formDetails = $request->except('_token', 'consent');

        // 5. Save the review using the database column names.
        StudyIndiaReview::create([
            'study_india_user_id' => $userId,

            'college_name' => $validated['college'],
            'course' => $validated['course'],
            'graduation_year' => $validated['admissionYear'],

            'overall_rating' => $validated['overallRating'],

            // The current form does not collect separate category ratings.
            // These columns must be nullable in the updated migration.
            'academics_rating' => null,
            'faculty_rating' => null,
            'placements_rating' => null,
            'infrastructure_rating' => null,
            'campus_life_rating' => null,

            'review_title' => null,
            'review_text' => $validated['review'],

            'student_name' => $validated['name'],
            'email' => $validated['email'],
            'country_code' => $validated['countryCode'],
            'mobile' => $validated['mobile'],
            'gender' => $validated['gender'],
            'linkedin' => $validated['linkedin'] ?? null,

            'college_display_name' => $validated['collegeDisplayName'] ?? null,
            'course_fees' => $validated['courseFees'],
            'class_size' => $validated['classSize'],

            'board_12' => $validated['board12'] ?? null,
            'score_12' => $validated['score12'] ?? null,
            'score_type_12' => $validated['scoreType12'] ?? null,

            'board_10' => $validated['board10'] ?? null,
            'score_10' => $validated['score10'] ?? null,
            'score_type_10' => $validated['scoreType10'] ?? null,

            'graduation_course' => $validated['graduationCourse'] ?? null,
            'graduation_score' => $validated['graduationScore'] ?? null,
            'graduation_score_type' => $validated['graduationScoreType'] ?? null,

            'referral_code' => $validated['referral'] ?? null,
            'reservation' => $validated['reservation'] ?? null,
            'reservation_type' => $validated['reservationType'] ?? null,
            'gdpi' => $validated['gdpi'] ?? null,

            'hostel' => $validated['hostel'] ?? null,
            'hostel_fees' => $validated['hostelFees'] ?? null,

            'placements' => $validated['placements'] ?? null,
            'average_package' => $validated['averagePackage'] ?? null,
            'internships' => $validated['internships'] ?? null,

            'other_colleges' => $otherColleges,
            'reason_not_chosen' => $validated['reasonNotChosen'] ?? null,

            'form_details' => $formDetails,

            'pros' => null,
            'cons' => null,
            'status' => 'pending',
        ]);

        return redirect()
    ->route('study-india.reviews.index')
    ->with('review_success', true);
    }

  
}
