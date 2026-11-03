<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadReview;
use App\Models\StudyAbroadUser;
use App\Models\WorldUniversityRanking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;
use App\Models\ApplicationMasterData;

class StudyAbroadReviewController extends Controller
{
    /**
     * Public review landing page.
     * Only approved reviews are returned.
     */
    public function index()
    {
        $reviews = StudyAbroadReview::where('status', 'approved')
            ->latest()
            ->paginate(6);

        $totalReviews = StudyAbroadReview::where('status', 'approved')
            ->count();

        $averageRating = StudyAbroadReview::where('status', 'approved')
            ->avg('overall_rating');

        return view('study-abroad.reviews.home-review', compact(
            'reviews',
            'totalReviews',
            'averageRating'
        ));
    }

    /**
     * Show the review form.
     */
    public function create(Request $request)
    {
        $userId = $request->session()->get('study_abroad_user_id');

        $reviewUser = $userId
            ? StudyAbroadUser::where('id', $userId)
            ->where('is_active', true)
            ->where('is_verified', true)
            ->first()
            : null;

        $ignitionCountries = ApplicationMasterData::where('type', 'ignitionCountry')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');

        $ignitionUniversities = ApplicationMasterData::where('type', 'ignitionUniversity')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');

        $courses = ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');

        return view('study-abroad.reviews.review-form', [
            'searchTerm' => $request->query('searchTerm'),
            'universities' => $this->getUniversityNames(),
            'reviewUser' => $reviewUser,
            'ignitionCountries' => $ignitionCountries,
            'ignitionUniversities' => $ignitionUniversities,
            'courses' => $courses,
        ]);
    }

    /**
     * Save a submitted review.
     */
    public function store(Request $request)
    {
        $userId = $request->session()->get('study_abroad_user_id');

        if (!$userId) {
            return redirect()
                ->route('study-abroad.login')
                ->with('error', 'Please log in to submit your review.');
        }

        $user = StudyAbroadUser::where('id', $userId)
            ->where('is_active', true)
            ->where('is_verified', true)
            ->first();

        if (!$user) {
            $request->session()->forget([
                'study_abroad_user_id',
                'study_abroad_authenticated',
                'study_abroad_application_id',
            ]);

            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Please log in with an active, verified Study Abroad account.'
                );
        }

        $currentYear = (int) date('Y');

        $validated = $request->validate([
            'fullName' => [
                'required',
                'string',
                'max:150',
                'regex:/^[\p{L}][\p{L}\s.\'-]*$/u',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'mobile' => [
                'required',
                'regex:/^[0-9]{10}$/',
            ],

            'university' => [
                'required',
                'string',
                'max:255',
            ],

            'country' => [
                'required',
                'string',
                Rule::in(
                    ApplicationMasterData::where('type', 'ignitionCountry')
                        ->where('status', 1)
                        ->pluck('name')
                        ->toArray()
                ),
            ],

            'course' => [
                'required',
                'string',
                'max:255',
            ],

            'enrollmentYear' => [
                'required',
                'integer',
                'min:' . ($currentYear - 35),
                'max:' . $currentYear,
            ],

            'fees' => [
                'nullable',
                'numeric',
                'min:0',
                'max:9999999999999',
            ],

            'reason' => [
                'required',
                'string',
                'min:50',
                'max:5000',
            ],

            'likes' => [
                'required',
                'string',
                'min:20',
                'max:5000',
            ],

            'improvements' => [
                'required',
                'string',
                'min:20',
                'max:5000',
            ],

            'advice' => [
                'nullable',
                'string',
                'max:5000',
            ],

            'academicsRating' => [
                'required',
                'integer',
                'between:1,5',
            ],

            'placements' => [
                'required',
                Rule::in([
                    'Excellent',
                    'Good',
                    'Average',
                    'Needs improvement',
                    'Not sure',
                ]),
            ],

            'accommodation' => [
                'required',
                Rule::in([
                    'University accommodation',
                    'Private accommodation',
                    'Shared accommodation',
                    'Living with family',
                    'Other',
                ]),
            ],

            'campusJobs' => [
                'nullable',
                'string',
                'max:5000',
            ],

            'overallRating' => [
                'required',
                'integer',
                'between:1,5',
            ],

            'headline' => [
                'required',
                'string',
                'min:8',
                'max:100',
            ],

            'consent' => [
                'required',
                'accepted',
            ],
        ]);

        $formDetails = collect($validated)
            ->except('consent')
            ->all();

        StudyAbroadReview::create([
            'study_abroad_user_id' => $user->id,

            'student_name' => trim($validated['fullName']),
            'student_email' => $validated['email'],
            'student_mobile' => $validated['mobile'],

            'university_name' => trim($validated['university']),
            'country' => $validated['country'],
            'course_name' => trim($validated['course']),
            'enrollment_year' => $validated['enrollmentYear'],
            'annual_tuition_fees' => $validated['fees'] ?? null,

            'reason_for_choice' => $validated['reason'],
            'likes' => $validated['likes'],
            'improvements' => $validated['improvements'],
            'advice' => $validated['advice'] ?? null,

            'academics_rating' => $validated['academicsRating'],
            'placements_support' => $validated['placements'],
            'accommodation_type' => $validated['accommodation'],
            'campus_jobs' => $validated['campusJobs'] ?? null,

            'overall_rating' => $validated['overallRating'],
            'review_headline' => trim($validated['headline']),

            'form_details' => $formDetails,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('study-abroad.reviews.index')
            ->with(
                'review_success',
                'Thank you! Your review has been submitted and is awaiting moderation.'
            );
    }

    /**
     * Load university names from the existing ranking table.
     * Supports common column names and allows manually entered universities.
     */
    private function getUniversityNames()
    {
        $model = new WorldUniversityRanking();
        $table = $model->getTable();

        if (!Schema::hasTable($table)) {
            return collect();
        }

        $columns = Schema::getColumnListing($table);

        $nameColumn = collect([
            'university_name',
            'institution_name',
            'institute_name',
            'university',
            'institution',
            'name',
        ])->first(
            fn($column) => in_array($column, $columns, true)
        );

        if (!$nameColumn) {
            return collect();
        }

        return DB::table($table)
            ->whereNotNull($nameColumn)
            ->where($nameColumn, '<>', '')
            ->select($nameColumn)
            ->distinct()
            ->orderBy($nameColumn)
            ->limit(5000)
            ->pluck($nameColumn);
    }
}
