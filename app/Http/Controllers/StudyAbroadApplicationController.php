<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadApplication;
use App\Models\StudyAbroadPersonalDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Msg91OtpService;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudyAbroadApplicationMail;

class StudyAbroadApplicationController extends Controller
{
    /**
     * Show Step 1.
     */
    public function create()
    {
        return view('study-abroad.application');
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

    /**
     * Show Step 2.
     */


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

                $education = \App\Models\StudyAbroadEducationPreference::updateOrCreate(
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

    public function savePastEducation(
        Request $request,
        // Msg91OtpService $otpService
    ) {
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

            // Get application
            $application = StudyAbroadApplication::findOrFail($applicationId);

            DB::transaction(function () use (
                $validated,
                $applicationId
            ) {

                // Save / update education details
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

                // Move application to OTP pending
                StudyAbroadApplication::where(
                    'id',
                    $applicationId
                )->update([
                    'status' => 'otp_pending',
                    'otp_verified' => false,
                ]);
            });

            // Generate 4-digit OTP
            // $otp = (string) random_int(1000, 9999);

            // Delete previous OTP
            // \App\Models\OtpVerification::where(
            //     'application_id',
            //     $applicationId
            // )->delete();

            // Store new OTP
            // \App\Models\OtpVerification::create([
            //     'application_id' => $applicationId,
            //     'phone' => $application->phone,
            //     'otp' => $otp,
            //     'expires_at' => now()->addMinutes(5),
            // ]);

            // Send OTP through MSG91
            // $otpService->sendOtp(
            //     $application->phone,
            //     $otp
            // );


            // Delete previous OTP
\App\Models\OtpVerification::where(
    'application_id',
    $applicationId
)->delete();

// Development/Test OTP
$otp = '1234';

// Store test OTP
\App\Models\OtpVerification::create([
    'application_id' => $applicationId,
    'phone' => $application->phone,
    'otp' => $otp,
    'expires_at' => now()->addMinutes(5),
]);

// Do not send SMS in development
\Log::info('TEST OTP', [
    'application_id' => $applicationId,
    'phone' => $application->phone,
    'otp' => $otp,
]);


            // Go to OTP page
            return redirect()
                ->route('study-abroad.otp')
                ->with(
                    'success',
                    'OTP has been sent to your mobile number.'
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

        $verification = \App\Models\OtpVerification::where(
            'application_id',
            $applicationId
        )
            ->where('otp', $request->otp)
            ->whereNull('verified_at')
            ->latest()
            ->first();

        if (!$verification) {
            return back()
                ->withInput()
                ->with('error', 'Incorrect OTP. Please try again.');
        }

        if ($verification->expires_at->isPast()) {
            return back()
                ->withInput()
                ->with('error', 'OTP has expired. Please request a new OTP.');
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
                'Phone number verified successfully.'
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
}
