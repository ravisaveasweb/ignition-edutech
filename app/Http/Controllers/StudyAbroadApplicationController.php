<?php

namespace App\Http\Controllers;

use App\Mail\StudyAbroadApplicationMail;
use App\Mail\StudyAbroadOtpMail;
use App\Models\ApplicationMasterData;
use App\Models\NirfHistoricalRanking;
use App\Models\OtpVerification;
use App\Models\StudyAbroadApplication;
use App\Models\StudyAbroadEducationPreference;
use App\Models\StudyAbroadPastEducation;
use App\Models\StudyAbroadPersonalDetail;
use App\Models\StudyAbroadTestScore;
use App\Models\StudyAbroadUser;
use App\Models\WorldUniversityRanking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class StudyAbroadApplicationController extends Controller
{
    // Show the authentication choice page.
    public function showAuth()
    {
        return view('study-abroad.auth');
    }

    // Redirect registration to application Step 1.
    public function register()
    {
        return redirect()->route('study-abroad.application');
    }

    // Show the login form.
    public function showLoginForm()
    {
        return view('study-abroad.login');
    }

    // Send an OTP to an existing applicant for login.

    public function sendLoginOtp(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                'exists:study_abroad_applications,email',
            ],
            'phone' => [
                'required',
                'regex:/^[1-9][0-9]{9}$/',
            ],
        ], [
            'email.required' => 'Please enter your registered email address.',
            'email.exists' => 'No application found with this email address. Please register.',
            'phone.required' => 'Please enter your registered phone number.',
            'phone.regex' => 'Please enter a valid 10-digit phone number.',
        ]);

        try {
            $application = StudyAbroadApplication::where(
                'email',
                $request->email
            )
                ->where('phone', $request->phone)
                ->latest()
                ->first();

            if (!$application) {
                return back()
                    ->withInput()
                    ->with(
                        'error',
                        'The email address and phone number do not match an application.'
                    );
            }

            // Keep your existing application session.
            session([
                'study_abroad_application_id' => $application->id,
            ]);

            // Keep your existing OTP generation and email logic.
            $this->generateAndSendOtp($application);

            return redirect()
                ->route('study-abroad.login.otp')
                ->with(
                    'success',
                    'A login OTP has been sent to your email address.'
                );
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Unable to send login OTP. Please try again.'
                );
        }
    }

    // Show the login OTP verification page.
    public function showLoginOtpForm()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.otp')
                ->with(
                    'error',
                    'Session expired. Please enter your email again.'
                );
        }

        $application = StudyAbroadApplication::findOrFail($applicationId);

        return view('study-abroad.otp', compact('application'));
    }

    // Verify the login OTP and restore the applicant's session.
    public function verifyLoginOtp(Request $request)
    {
        $applicationId = $request->session()->get(
            'study_abroad_application_id'
        );

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Session expired. Please enter your email again.'
                );
        }

        $request->validate([
            'otp' => ['required', 'digits:4'],
        ]);

        $application = StudyAbroadApplication::with('personalDetails')
            ->find($applicationId);

        if (!$application) {
            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'We could not verify these details. Check your email and phone number, or register.'
                );
        }

        // Find the existing Study Abroad account without changing its status.
        $existingUser = StudyAbroadUser::where(
            'email',
            $application->email
        )->first();

        // Reject deactivated accounts.
        if ($existingUser && !$existingUser->is_active) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'We could not verify these details. Check your email and phone number, or register.'
                );
        }

        // Retrieve the latest unverified OTP for the application.
        $verification = OtpVerification::where(
            'application_id',
            $applicationId
        )
            ->whereNull('verified_at')
            ->latest('id')
            ->first();

        if (!$verification) {
            return back()->with(
                'error',
                'OTP not found. Please request a new OTP.'
            );
        }

        // Reject expired OTPs.
        if ($verification->expires_at->isPast()) {
            return back()->with(
                'error',
                'OTP has expired. Please request a new OTP.'
            );
        }

        // Compare the submitted OTP securely.
        if (!hash_equals(
            (string) $verification->otp,
            (string) $request->input('otp')
        )) {
            return back()->with(
                'error',
                'Incorrect OTP. Please try again.'
            );
        }

        // Create a user only when an account does not already exist.
        if (!$existingUser) {
            $user = StudyAbroadUser::create([
                'email' => $application->email,
                'full_name' => $application->personalDetails?->full_name
                    ?? 'Applicant',
                'phone' => $application->phone,
                'is_active' => true,
                'is_verified' => true,
            ]);
        } else {
            // Preserve the existing account's active status.
            $user = $existingUser;

            $user->update([
                'is_verified' => true,
            ]);
        }

        // Mark the OTP as verified.
        $verification->update([
            'verified_at' => now(),
        ]);

        // Link the application to the user when it is not already linked.
        if (!$application->study_abroad_user_id) {
            $application->update([
                'study_abroad_user_id' => $user->id,
            ]);
        }

        // Regenerate the session after successful authentication.
        $request->session()->regenerate();

        $request->session()->put([
            'study_abroad_user_id' => $user->id,
            'study_abroad_authenticated' => true,
            'study_abroad_application_id' => $application->id,
        ]);

        return redirect()
            ->route('study-abroad')
            ->with(
                'study_abroad_auth_success',
                'Logged in successfully.'
            );
    }

    // Resend the login OTP with a 60-second cooldown.
    public function resendLoginOtp(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return response()->json([
                'success' => false,
                'message' => 'Session expired. Please enter your email again.',
            ], 401);
        }

        $application = StudyAbroadApplication::find($applicationId);

        if (!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Application not found.',
            ], 404);
        }

        $resendAt = session('study_abroad_login_otp_resend_at');

        if ($resendAt && now()->timestamp < $resendAt) {
            $remainingSeconds = $resendAt - now()->timestamp;

            return response()->json([
                'success' => false,
                'message' => 'Please wait before requesting another OTP.',
                'remaining_seconds' => $remainingSeconds,
            ], 429);
        }

        try {
            $this->generateAndSendLoginOtp($application);

            return response()->json([
                'success' => true,
                'message' => 'A new OTP has been sent to your email address.',
                'remaining_seconds' => 60,
            ]);
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Unable to send OTP. Please try again.',
            ], 500);
        }
    }

    // Show application Step 1 with available cities and courses.
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

        return view(
            'study-abroad.application',
            compact('cities', 'courses')
        );
    }

    // Validate and save Step 1 personal details.
    public function savePersonalDetails(Request $request)
    {

        $validated = $request->validate([
            'full_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[A-Za-z]+(?:[ .\'-][A-Za-z]+)*$/',
            ],

            'email' => [
                'required',
                'string',
                'email:rfc',
                'max:255',
            ],

            'phone' => [
                'required',
                'regex:/^[1-9][0-9]{9}$/',
            ],

            'city' => ['required', 'string', 'max:100'],
            'course_interested' => ['required', 'string', 'max:255'],
            'start_study' => ['required', 'string', 'max:255'],
            'terms_accepted' => ['accepted'],
        ], [
            'full_name.required' => 'Please enter your full name.',
            'full_name.min' => 'Your name must contain at least 2 characters.',
            'full_name.max' => 'Your name cannot exceed 100 characters.',
            'full_name.regex' => 'Please enter a valid name using letters, spaces, hyphens, apostrophes or periods.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email address cannot exceed 255 characters.',

            'phone.required' => 'Please enter your mobile number.',
            'phone.regex' => 'Please enter a valid 10-digit mobile number without a leading zero.',

            'city.required' => 'Please enter your city.',
            'course_interested.required' => 'Please select a course.',
            'start_study.required' => 'Please select when you plan to start your studies.',
            'terms_accepted.accepted' => 'Please accept the terms and privacy policy.',
        ]);


        try {
            $application = null;

            DB::transaction(function () use ($validated, &$application) {
                // Find or prepare the Study Abroad user by email.
                $user = StudyAbroadUser::firstOrNew([
                    'email' => $validated['email'],
                ]);

                // Prevent registration for a deactivated account.
                if ($user->exists && !$user->is_active) {
                    throw ValidationException::withMessages([
                        'email' => 'This account is deactivated. Please contact support.',
                    ]);
                }

                // Update the user's personal information.
                $user->full_name = $validated['full_name'];
                $user->phone = $validated['phone'];
                $user->city = $validated['city'];
                $user->course_interested = $validated['course_interested'];

                // Set initial account status for new users.
                if (!$user->exists) {
                    $user->is_verified = false;
                    $user->is_active = true;
                }

                $user->save();

                // Create the Study Abroad application.
                $application = StudyAbroadApplication::create([
                    'study_abroad_user_id' => $user->id,
                    'phone' => $validated['phone'],
                    'email' => $validated['email'],
                    'otp_verified' => false,
                    'status' => 'step_1',
                ]);

                // Save the application's personal details.
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

            // Store the application ID for the next step.
            session([
                'study_abroad_application_id' => $application->id,
            ]);

            return redirect()
                ->route('study-abroad.step2')
                ->with(
                    'success',
                    'Personal details saved successfully.'
                );
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Throwable $e) {
            report($e);

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Unable to save your details. Please try again.'
                );
        }
    }

    // Save Step 2 education preferences and test scores.
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
                // Save or update education preferences.
                StudyAbroadEducationPreference::updateOrCreate(
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

                // Replace the application's existing test scores.
                StudyAbroadTestScore::where(
                    'application_id',
                    $applicationId
                )->delete();

                // Save English test selections and scores.
                foreach ($validated['english_tests'] ?? [] as $test) {
                    StudyAbroadTestScore::create([
                        'application_id' => $applicationId,
                        'test_type' => 'english',
                        'test_name' => $test,
                        'score' => $validated['english_scores'][$test] ?? null,
                    ]);
                }

                // Save entrance exam selections and scores.
                foreach ($validated['entrance_exams'] ?? [] as $exam) {
                    StudyAbroadTestScore::create([
                        'application_id' => $applicationId,
                        'test_type' => 'entrance',
                        'test_name' => $exam,
                        'score' => $validated['entrance_scores'][$exam] ?? null,
                    ]);
                }

                // Update the application status to Step 2.
                StudyAbroadApplication::where(
                    'id',
                    $applicationId
                )->update([
                    'status' => 'step_2',
                ]);
            });

            return redirect()
                ->route('study-abroad.step3')
                ->with(
                    'success',
                    'Education preferences saved successfully.'
                );
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

    // Show Step 3 with previously saved application details.
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

    // Validate and save the applicant's past education.
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
            'tenth_passing_year' => [
                'required',
                'integer',
                'min:1950',
                'max:' . date('Y'),
            ],
            'tenth_percentage' => ['required', 'numeric', 'min:0', 'max:100'],
            'tenth_school_name' => ['nullable', 'string', 'max:255'],
            'twelfth_board' => ['required', 'string', 'max:255'],
            'twelfth_passing_year' => [
                'required',
                'integer',
                'min:1950',
                'max:' . date('Y'),
            ],
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
            $application = StudyAbroadApplication::findOrFail(
                $applicationId
            );

            DB::transaction(function () use (
                $validated,
                $applicationId
            ) {
                // Save or update the applicant's education history.
                StudyAbroadPastEducation::updateOrCreate(
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

                // Move the application to OTP verification.
                StudyAbroadApplication::where(
                    'id',
                    $applicationId
                )->update([
                    'status' => 'otp_pending',
                    'otp_verified' => false,
                ]);
            });

            // Generate and email the application verification OTP.
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

    // Show the application OTP verification page.
    public function otp()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with(
                    'error',
                    'Please complete the application first.'
                );
        }

        $application = StudyAbroadApplication::findOrFail($applicationId);

        return view('study-abroad.otp', compact('application'));
    }

    // Verify the application OTP and complete the application.
    public function verifyOtp(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()
                ->route('study-abroad.application')
                ->with('error', 'Application session expired.');
        }

        $request->validate([
            'otp' => ['required', 'digits:4'],
        ]);

        // Retrieve the latest unverified application OTP.
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
                ->with(
                    'error',
                    'No OTP found. Please request a new OTP.'
                );
        }

        // Reject expired OTPs.
        if ($verification->expires_at->isPast()) {
            return back()
                ->withInput()
                ->with(
                    'error',
                    'OTP has expired. Please request a new OTP.'
                );
        }

        // Reject an incorrect OTP.
        if ($verification->otp !== $request->otp) {
            return back()
                ->withInput()
                ->with('error', 'Incorrect OTP. Please try again.');
        }

        // Mark the OTP as verified and complete the application.
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

        // Load all application details for the completion email and account.
        $application = StudyAbroadApplication::with([
            'personalDetails',
            'educationPreference',
            'testScores',
            'pastEducation',
        ])->findOrFail($applicationId);

        // Create or update the Study Abroad user after OTP verification.
        $user = StudyAbroadUser::updateOrCreate(
            [
                'email' => $application->email,
            ],
            [
                'full_name' => $application->personalDetails?->full_name
                    ?? 'Applicant',
                'phone' => $application->phone,
                'is_active' => true,
                'is_verified' => true,
            ]
        );

        // Link the application to the verified user.
        $application->update([
            'study_abroad_user_id' => $user->id,
            'otp_verified' => true,
            'status' => 'completed',
        ]);

        // Establish the authenticated Study Abroad session.
        $request->session()->regenerate();

        $request->session()->put([
            'study_abroad_user_id' => $user->id,
            'study_abroad_authenticated' => true,
            'study_abroad_application_id' => $application->id,
        ]);

        // Send the application details to the configured administrator email.
        Mail::to(config('mail.admin_email'))
            ->send(new StudyAbroadApplicationMail($application));

        return redirect()
            ->route('study-abroad.completed')
            ->with('success', 'Email verified successfully.');
    }

    // Resend the application OTP with a 60-second cooldown.
    public function resendOtp(Request $request)
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return response()->json([
                'success' => false,
                'message' => 'Application session expired. Please start again.',
            ], 401);
        }

        $application = StudyAbroadApplication::find($applicationId);

        if (!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Application not found.',
            ], 404);
        }

        $resendAt = session('study_abroad_otp_resend_at');

        if ($resendAt && now()->timestamp < $resendAt) {
            $remainingSeconds = $resendAt - now()->timestamp;

            return response()->json([
                'success' => false,
                'message' => 'Please wait before requesting another OTP.',
                'remaining_seconds' => $remainingSeconds,
            ], 429);
        }

        try {
            $this->generateAndSendOtp($application);

            return response()->json([
                'success' => true,
                'message' => 'A new OTP has been sent to your email address.',
                'remaining_seconds' => 60,
            ]);
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Unable to send OTP. Please try again.',
            ], 500);
        }
    }

    // Show the completed application.
    public function completed()
    {
        $applicationId = session('study_abroad_application_id');

        if (!$applicationId) {
            return redirect()->route('study-abroad.application');
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

    // Show Step 2 with saved personal details.
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

    // Generate, store, and email an application OTP.
    private function generateAndSendOtp(
        StudyAbroadApplication $application
    ) {
        // Remove previous OTP records for this application.
        OtpVerification::where(
            'application_id',
            $application->id
        )->delete();

        // Generate a four-digit OTP.
        $otp = (string) random_int(1000, 9999);

        // Store the OTP with a five-minute expiry.
        OtpVerification::create([
            'application_id' => $application->id,
            'phone' => $application->phone,
            'email' => $application->email,
            'otp' => $otp,
            'expires_at' => now()->addMinutes(5),
        ]);

        // Prevent another application OTP request for 60 seconds.
        session([
            'study_abroad_otp_resend_at' => now()
                ->addSeconds(60)
                ->timestamp,
        ]);

        // Send the OTP to the applicant's email.
        Mail::to($application->email)
            ->send(new StudyAbroadOtpMail($otp));
    }

    // Generate, store, and email a login OTP.
    private function generateAndSendLoginOtp(
        StudyAbroadApplication $application
    ) {
        // Remove previous OTP records for this application.
        OtpVerification::where(
            'application_id',
            $application->id
        )->delete();

        // Generate a four-digit OTP.
        $otp = (string) random_int(1000, 9999);

        // Store the OTP with a five-minute expiry.
        OtpVerification::create([
            'application_id' => $application->id,
            'phone' => $application->phone,
            'email' => $application->email,
            'otp' => $otp,
            'expires_at' => now()->addMinutes(5),
        ]);

        // Prevent another login OTP request for 60 seconds.
        session([
            'study_abroad_login_otp_resend_at' => now()
                ->addSeconds(60)
                ->timestamp,
        ]);

        // Send the OTP to the applicant's email.
        Mail::to($application->email)
            ->send(new StudyAbroadOtpMail($otp));
    }

    // Show the Study Abroad homepage and university rankings.
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

    // Show the paginated list of world universities.
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

    // Log out the Study Abroad user.
    public function logout(Request $request)
    {
        $request->session()->forget([
            'study_abroad_user_id',
            'study_abroad_application_id',
            'study_abroad_authenticated',
            'study_abroad_login_otp_resend_at',
            'study_abroad_otp_resend_at',
        ]);

        return redirect('/study-abroad')
            ->with(
                'success',
                'You have been logged out successfully.'
            );
    }

    // Show the logged-in user's profile.
    public function profile()
    {
        if (
            !session('study_abroad_authenticated') ||
            !session('study_abroad_user_id')
        ) {
            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Please log in to view your profile.'
                );
        }

        $user = StudyAbroadUser::where(
            'id',
            session('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->first();

        if (!$user) {
            session()->forget([
                'study_abroad_user_id',
                'study_abroad_authenticated',
            ]);

            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Your account could not be found. Please log in again.'
                );
        }

        return view('study-abroad.account.profile', compact('user'));
    }

    // Validate and update the logged-in user's profile.
    public function updateProfile(Request $request)
    {
        if (
            !session('study_abroad_authenticated') ||
            !session('study_abroad_user_id')
        ) {
            return redirect()->route('study-abroad.login');
        }

        $user = StudyAbroadUser::where(
            'id',
            session('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->firstOrFail();

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:25'],
            'city' => ['nullable', 'string', 'max:100'],
            'course_interested' => ['nullable', 'string', 'max:255'],
        ]);

        $user->update($validated);

        return back()->with('success', 'Profile updated successfully.');
    }

    // Validate and update the user's profile photo.
    public function updateProfilePhoto(Request $request)
    {
        // Check whether the user is authenticated.
        if (
            !session('study_abroad_authenticated') ||
            !session('study_abroad_user_id')
        ) {
            return redirect()->route('study-abroad.login');
        }

        // Retrieve the active Study Abroad user.
        $user = StudyAbroadUser::where(
            'id',
            session('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->firstOrFail();

        // Validate the uploaded profile image.
        $request->validate([
            'profile_image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ]);

        // Keep the previous image path for cleanup.
        $oldImage = $user->profile_image;

        // Store the new image on the public disk.
        $newImage = $request->file('profile_image')->store(
            'study-abroad/profile-photos',
            'public'
        );

        // Save the new image path.
        $user->profile_image = $newImage;
        $user->save();

        // Delete the previous image after saving the new one.
        if ($oldImage) {
            Storage::disk('public')->delete($oldImage);
        }

        return back()->with(
            'success',
            'Profile photo updated successfully.'
        );
    }

    // Show the user's account settings.
    public function settings()
    {
        if (
            !session('study_abroad_authenticated') ||
            !session('study_abroad_user_id')
        ) {
            return redirect()->route('study-abroad.login');
        }

        $user = StudyAbroadUser::where(
            'id',
            session('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->first();

        if (!$user) {
            session()->forget([
                'study_abroad_user_id',
                'study_abroad_authenticated',
            ]);

            return redirect()
                ->route('study-abroad.login')
                ->with('error', 'Please log in again.');
        }

        return view('study-abroad.account.settings', compact('user'));
    }

    // Update the user's email notification preference.
    public function updateSettings(Request $request)
    {
        if (
            !session('study_abroad_authenticated') ||
            !session('study_abroad_user_id')
        ) {
            return redirect()->route('study-abroad.login');
        }

        $user = StudyAbroadUser::where(
            'id',
            session('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->firstOrFail();

        $user->email_notifications = $request->boolean(
            'email_notifications'
        );

        $user->save();

        return back()->with(
            'success',
            'Notification preferences saved.'
        );
    }

    // Deactivate the user's account without deleting its data.
    public function deactivateAccount(Request $request)
    {
        if (
            !$request->session()->has('study_abroad_authenticated') ||
            !$request->session()->has('study_abroad_user_id')
        ) {
            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Please log in to deactivate your account.'
                );
        }

        $request->validate([
            'confirm_deactivation' => ['required', 'accepted'],
        ]);

        // Find the currently active account.
        $user = StudyAbroadUser::where(
            'id',
            $request->session()->get('study_abroad_user_id')
        )
            ->where('is_active', true)
            ->first();

        if (!$user) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()
                ->route('study-abroad.login')
                ->with(
                    'error',
                    'Your account was not found or is already deactivated.'
                );
        }

        // Mark the account as inactive without deleting its data.
        $user->is_active = false;
        $user->save();

        // Invalidate the session and regenerate the CSRF token.
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('study-abroad.login')
            ->with(
                'success',
                'Your Study Abroad account has been deactivated successfully.'
            );
    }
}
