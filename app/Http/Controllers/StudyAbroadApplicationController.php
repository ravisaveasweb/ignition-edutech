<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadApplication;
use App\Models\StudyAbroadPersonalDetail;
use App\Models\StudyAbroadEducationPreference;
use App\Models\StudyAbroadTestScore;
use App\Models\StudyAbroadPastEducation;
use App\Models\OtpVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudyAbroadApplicationMail;
use App\Mail\StudyAbroadOtpMail;
use App\Models\WorldUniversityRanking;
use App\Models\NirfHistoricalRanking;
use App\Models\ApplicationMasterData;

class StudyAbroadApplicationController extends Controller
{
    /**
     * Show Auth Choice Page (Login or Register buttons)
     */
    public function showAuth()
    {
        return view('study-abroad.auth');
    }

    /**
     * Redirect to Registration (Step 1)
     */
    public function register()
    {
        return redirect()->route('study-abroad.application');
    }

    /**
     * Show Login Form (Enter Email)
     */
    public function showLoginForm()
    {
        return view('study-abroad.login');
    }

    /**
     * Send OTP for Existing User Login
     */
    public function sendLoginOtp(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'exists:study_abroad_applications,email'],
        ], [
            'email.required' => 'Please enter your registered email address.',
            'email.exists' => 'No application found with this email address. Please register.',
        ]);

        try {
            $application = StudyAbroadApplication::where('email', $request->email)->latest()->first();

            if (!$application) {
                return back()->with('error', 'Application not found.');
            }

            // Store application ID temporarily in session for login verification
            session(['study_abroad_application_id' => $application->id]);

            $this->generateAndSendOtp($application);

            return redirect()
                ->route('study-abroad.login.otp')
                ->with('success', 'A login OTP has been sent to your email address.');
        } catch (\Throwable $e) {
            report($e);
            return back()->withInput()->with('error', 'Unable to send login OTP. Please try again.');
        }
    }

    /**
     * Show Login OTP Verification Page
     */
    public function showLoginOtpForm()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.login')
                ->with('error', 'Session expired. Please enter your email again.');
        }

        $application = StudyAbroadApplication::findOrFail($applicationId);

        return view('study-abroad.login-otp', compact('application'));
    }

    /**
     * Verify Login OTP and Resume Application
     */
    public function verifyLoginOtp(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.login')
                ->with('error', 'Session expired.');
        }

        $request->validate([
            'otp' => ['required', 'digits:4'],
        ]);

        $verification = OtpVerification::where('application_id', $applicationId)
            ->whereNull('verified_at')
            ->latest()
            ->first();

        if (!$verification || $verification->expires_at->isPast() || $verification->otp !== $request->otp) {
            return back()->withInput()->with('error', 'Invalid or expired OTP.');
        }

        $verification->update(['verified_at' => now()]);

        $application = StudyAbroadApplication::findOrFail($applicationId);

        // Redirect user based on their current application progress/status
        // return match ($application->status) {
        //     'step_1' => redirect()->route('study-abroad.step2')->with('success', 'Logged in successfully.'),
        //     'step_2' => redirect()->route('study-abroad.step3')->with('success', 'Logged in successfully.'),
        //     'completed' => redirect()->route('study-abroad.completed')->with('success', 'Logged in successfully.'),
        //     default => redirect()->route('study-abroad.step2')->with('success', 'Logged in successfully.'),

        // };

        return redirect('/')->with('success', 'Logged in successfully.');
    }

    /**
     * Show Step 1.
     */
    public function create()
    {

        $cities = ApplicationMasterData::where('type', 'city')
            ->where('status', 1)
            ->orderBy('name')
            ->get();

        $courses = ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->get();
        return view('study-abroad.application', compact('cities', 'courses'));
    }




    /**
     * Save Step 1.
     */
    public function savePersonalDetails(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'city' => ['required', 'string', 'max:100'],
            'course_interested' => ['required', 'string', 'max:255'],
            'start_study' => ['required', 'string', 'max:255'],
            'terms_accepted' => ['accepted'],
        ], [
            'full_name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Please enter your mobile number.',
            'city.required' => 'Please enter your city.',
            'course_interested.required' => 'Please select a course.',
            'start_study.required' => 'Please select when you plan to start your studies.',
            'terms_accepted.accepted' => 'Please accept the terms and privacy policy.',
        ]);

        try {
            $application = null;

            DB::transaction(function () use ($validated, &$application) {
                $application = StudyAbroadApplication::create([
                    'phone' => $validated['phone'],
                    'email' => $validated['email'],
                    'otp_verified' => false,
                    'status' => 'step_1',
                ]);

                StudyAbroadPersonalDetail::create([
                    'application_id' => $application->id,
                    'full_name' => $validated['full_name'],
                    'email' => $validated['email'],
                    'phone' => $validated['phone'],
                    'city' => $validated['city'],
                    'course_interested' => $validated['course_interested'],
                    'start_study' => $validated['start_study'],
                    'terms_accepted' => true,
                ]);
            });

            session([
                'study_abroad_application_id' => $application->id,
            ]);

            return redirect()
                ->route('study-abroad.step2')
                ->with('success', 'Personal details saved successfully.');
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with('error', 'Unable to save your details. Please try again.');
        }
    }

    public function saveEducationPreferences(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Please complete Step 1 first.');
        }

        $validated = $request->validate([
            'gender' => ['nullable', 'string', 'max:50'],
            'preferred_destination' => ['required', 'string', 'max:255'],
            'specialization' => ['required', 'string', 'max:255'],
            'interested_university' => ['required', 'string', 'max:255'],
            'english_test_status' => ['nullable', 'string', 'max:50'],
            'entrance_exam_status' => ['nullable', 'string', 'max:50'],
            'english_tests' => ['nullable', 'array'],
            'english_scores' => ['nullable', 'array'],
            'entrance_exams' => ['nullable', 'array'],
            'entrance_scores' => ['nullable', 'array'],
        ], [
            'preferred_destination.required' => 'Please select your preferred destination.',
            'specialization.required' => 'Please select your specialization.',
            'interested_university.required' => 'Please select an interested university.',
        ]);

        try {
            DB::transaction(function () use ($validated, $applicationId) {
                \App\Models\StudyAbroadEducationPreference::updateOrCreate(
                    [
                        'application_id' => $applicationId,
                    ],
                    [
                        'gender' => $validated['gender'] ?? null,
                        'preferred_destination' => $validated['preferred_destination'],
                        'specialization' => $validated['specialization'],
                        'interested_university' => $validated['interested_university'],
                        'english_test_status' => $validated['english_test_status'] ?? null,
                        'entrance_exam_status' => $validated['entrance_exam_status'] ?? null,
                    ]
                );

                \App\Models\StudyAbroadTestScore::where(
                    'application_id',
                    $applicationId
                )->delete();

                foreach ($validated['english_tests'] ?? [] as $test) {
                    \App\Models\StudyAbroadTestScore::create([
                        'application_id' => $applicationId,
                        'test_type' => 'english',
                        'test_name' => $test,
                        'score' => $validated['english_scores'][$test] ?? null,
                    ]);
                }

                foreach ($validated['entrance_exams'] ?? [] as $exam) {
                    \App\Models\StudyAbroadTestScore::create([
                        'application_id' => $applicationId,
                        'test_type' => 'entrance',
                        'test_name' => $exam,
                        'score' => $validated['entrance_scores'][$exam] ?? null,
                    ]);
                }

                \App\Models\StudyAbroadApplication::where(
                    'id',
                    $applicationId
                )->update([
                    'status' => 'step_2',
                ]);
            });

            return redirect()
                ->route('study-abroad.step3')
                ->with('success', 'Education preferences saved successfully.');
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Unable to save education preferences. Please try again.'
                );
        }
    }

    public function step3()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Please complete Step 1 first.');
        }

        $application = StudyAbroadApplication::with([
            'personalDetails',
            'educationPreference',
            'testScores',
            'pastEducation',
        ])->findOrFail($applicationId);

        return view('study-abroad.step3', compact('application'));
    }

    public function savePastEducation(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Please complete Step 1 first.');
        }

        $validated = $request->validate([
            'tenth_board' => ['required', 'string', 'max:255'],
            'tenth_passing_year' => ['required', 'integer', 'min:1950', 'max:' . date('Y')],
            'tenth_percentage' => ['required', 'numeric', 'min:0', 'max:100'],
            'tenth_school_name' => ['nullable', 'string', 'max:255'],

            'twelfth_board' => ['required', 'string', 'max:255'],
            'twelfth_passing_year' => ['required', 'integer', 'min:1950', 'max:' . date('Y')],
            'twelfth_percentage' => ['required', 'numeric', 'min:0', 'max:100'],
            'twelfth_school_name' => ['required', 'string', 'max:255'],
            'twelfth_specialization' => ['required', 'string', 'max:255'],

            'passport' => ['required', 'in:0,1'],
        ], [
            'tenth_board.required' => 'Please select your 10th board.',
            'tenth_passing_year.required' => 'Please select your 10th passing year.',
            'tenth_percentage.required' => 'Please enter your 10th percentage.',

            'twelfth_board.required' => 'Please select your 12th board.',
            'twelfth_passing_year.required' => 'Please select your 12th passing year.',
            'twelfth_percentage.required' => 'Please enter your 12th percentage.',
            'twelfth_school_name.required' => 'Please enter your 12th school name.',
            'twelfth_specialization.required' => 'Please select your 12th specialization.',

            'passport.required' => 'Please select your passport status.',
        ]);

        try {
            $application = StudyAbroadApplication::findOrFail($applicationId);

            DB::transaction(function () use (
                $validated,
                $applicationId
            ) {
                \App\Models\StudyAbroadPastEducation::updateOrCreate(
                    [
                        'application_id' => $applicationId,
                    ],
                    [
                        'tenth_board' => $validated['tenth_board'],
                        'tenth_passing_year' => $validated['tenth_passing_year'],
                        'tenth_percentage' => $validated['tenth_percentage'],
                        'tenth_school_name' => $validated['tenth_school_name'] ?? null,

                        'twelfth_board' => $validated['twelfth_board'],
                        'twelfth_passing_year' => $validated['twelfth_passing_year'],
                        'twelfth_percentage' => $validated['twelfth_percentage'],
                        'twelfth_school_name' => $validated['twelfth_school_name'],
                        'twelfth_specialization' => $validated['twelfth_specialization'],

                        'passport' => $validated['passport'],
                    ]
                );

                StudyAbroadApplication::where(
                    'id',
                    $applicationId
                )->update([
                    'status' => 'otp_pending',
                    'otp_verified' => false,
                ]);
            });

            $this->generateAndSendOtp($application);

            return redirect()
                ->route('study-abroad.otp')
                ->with(
                    'success',
                    'A 4-digit OTP has been sent to your email address.'
                );
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Unable to send OTP. Please try again.'
                );
        }
    }

    public function otp()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Please complete the application first.');
        }

        $application = StudyAbroadApplication::findOrFail($applicationId);

        return view('study-abroad.otp', compact('application'));
    }

    public function verifyOtp(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Application session expired.');
        }

        $request->validate([
            'otp' => [
                'required',
                'digits:4',
            ],
        ]);

        $verification = OtpVerification::where(
            'application_id',
            $applicationId
        )
            ->whereNull('verified_at')
            ->latest()
            ->first();

        if (!$verification) {
            return back()
                ->withInput()
                ->with('error', 'No OTP found. Please request a new OTP.');
        }

        if ($verification->expires_at->isPast()) {
            return back()
                ->withInput()
                ->with('error', 'OTP has expired. Please request a new OTP.');
        }

        if ($verification->otp !== $request->otp) {
            return back()
                ->withInput()
                ->with('error', 'Incorrect OTP. Please try again.');
        }

        DB::transaction(function () use (
            $verification,
            $applicationId
        ) {
            $verification->update([
                'verified_at' => now(),
            ]);

            StudyAbroadApplication::where(
                'id',
                $applicationId
            )->update([
                'otp_verified' => true,
                'status' => 'completed',
            ]);
        });

        $application = StudyAbroadApplication::with([
            'personalDetails',
            'educationPreference',
            'testScores',
            'pastEducation',
        ])->findOrFail($applicationId);

        Mail::to(config('mail.admin_email'))
            ->send(
                new StudyAbroadApplicationMail($application)
            );

        return redirect()
            ->route('study-abroad.completed')
            ->with(
                'success',
                'Email verified successfully.'
            );
    }

    public function completed()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application');
        }

        $application = StudyAbroadApplication::with([
            'personalDetails',
            'educationPreference',
            'testScores',
            'pastEducation',
        ])->findOrFail($applicationId);

        return view(
            'study-abroad.completed',
            compact('application')
        );
    }

    public function step2()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Please complete Step 1 first.');
        }

        $application = StudyAbroadApplication::with('personalDetails')
            ->findOrFail($applicationId);


        return view('study-abroad.step2', compact('application'));
    }

    /**
     * Helper Method for Generating and Sending OTP
     */
    private function generateAndSendOtp(StudyAbroadApplication $application)
    {
        OtpVerification::where(
            'application_id',
            $application->id
        )->delete();

        $otp = (string) random_int(1000, 9999);

        OtpVerification::create([
            'application_id' => $application->id,
            'phone' => $application->phone,
            'email' => $application->email,
            'otp' => $otp,
            'expires_at' => now()->addMinutes(5),
        ]);

        Mail::to($application->email)
            ->send(
                new StudyAbroadOtpMail($otp)
            );
    }


    // Study Abroad

    public function studyAbroad()
    {
        $worldUniversities = WorldUniversityRanking::orderBy('rank_2026')
          ->orderByRaw('CAST(rank_2026 AS UNSIGNED)')
            ->get();

        $worldCountries = $worldUniversities
            ->pluck('country')
            ->filter()
            ->unique()
            ->sort()
            ->values();

        return view('study_abroad', compact(
            'worldUniversities',
            'worldCountries'
        ));
    }

    public function worldUniversities()
{
    $worldUniversities = WorldUniversityRanking::query()
        ->orderByRaw('CAST(rank_2026 AS UNSIGNED)')
        ->paginate(25);

    $worldCountries = WorldUniversityRanking::query()
        ->pluck('country')
        ->filter()
        ->unique()
        ->sort()
        ->values();

    return view('world-universities', compact(
        'worldUniversities',
        'worldCountries'
    ));
}
}
