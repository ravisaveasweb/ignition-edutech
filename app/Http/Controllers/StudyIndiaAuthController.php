<?php

namespace App\Http\Controllers;

use App\Models\StudyIndiaUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Throwable;
use Illuminate\Support\Facades\Storage;

class StudyIndiaAuthController extends Controller
{
    private const USER_ID = 'study_india_user_id';
    private const PENDING_ID = 'study_india_pending_user_id';
    private const PENDING_EMAIL = 'study_india_pending_email';
    private const FLOW = 'study_india_otp_flow';

 
    
public function showRegister()
{
    $cities = [
        'Agra',
        'Ahmedabad',
        'Ajmer',
        'Amritsar',
        'Bengaluru',
        'Bhopal',
        'Bhubaneswar',
        'Chandigarh',
        'Chennai',
        'Coimbatore',
        'Dehradun',
        'Delhi',
        'Faridabad',
        'Ghaziabad',
        'Gurugram',
        'Guwahati',
        'Gwalior',
        'Hyderabad',
        'Indore',
        'Jaipur',
        'Jalandhar',
        'Jammu',
        'Jodhpur',
        'Kanpur',
        'Kochi',
        'Kolkata',
        'Kota',
        'Lucknow',
        'Ludhiana',
        'Madurai',
        'Mangaluru',
        'Meerut',
        'Mumbai',
        'Mysuru',
        'Nagpur',
        'Nashik',
        'Navi Mumbai',
        'Noida',
        'Patna',
        'Prayagraj',
        'Pune',
        'Raipur',
        'Rajkot',
        'Ranchi',
        'Srinagar',
        'Surat',
        'Thane',
        'Thiruvananthapuram',
        'Tiruchirappalli',
        'Udaipur',
        'Vadodara',
        'Varanasi',
        'Vijayawada',
        'Visakhapatnam',
    ];

    sort($cities);

    return view('study-india.auth.register', compact('cities'));
}


    public function register(Request $request)
    {

        $data = $request->validate([
            'full_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[\pL\pM]+(?:[ \'-][\pL\pM]+)*$/u',
            ],

            'email' => [
                'required',
                'email:rfc, dns',
                'max:255',
                'regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/',
            ],

            'phone' => [
                'required',
                'regex:/^(?!([0-9])\1{9}$)[1-9][0-9]{9}$/',
            ],

            'city' => [
                'required',
                'string',
                'max:100',
            ],

            'course_interested' => [
                'required',
                'string',
                'max:150',
            ],
        ]);

        $data['email'] = Str::lower(trim($data['email']));
        $data['phone'] = trim($data['phone']);

        $user = StudyIndiaUser::where('email', $data['email'])->first();

        if ($user && $user->is_verified) {
            $message = $user->is_active
                ? 'This email is already registered. Please log in.'
                : 'This account is deactivated. Please contact support for reactivation.';

            throw ValidationException::withMessages([
                'email' => $message,
            ]);
        }

        if ($user) {
            $user->update([
                'full_name' => $data['full_name'],
                'phone' => $data['phone'],
                'city' => $data['city'],
                'course_interested' => $data['course_interested'],
            ]);
        } else {
            $user = StudyIndiaUser::create([
                ...$data,
                'is_verified' => false,
            ]);
        }

        session([
            self::PENDING_ID => $user->id,
            self::PENDING_EMAIL => $user->email,
            self::FLOW => 'register',
        ]);

        return $this->sendOtp($request, $user);
    }

    public function showLogin()
    {
        return view('study-india.auth.login');
    }

    public function sendLoginOtp(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email:rfc', 'max:255'],
            'phone' => [
                'required',
                'regex:/^(?!([0-9])\1{9}$)[1-9][0-9]{9}$/',
            ],
        ]);

        $email = Str::lower(trim($data['email']));
        $phone = trim($data['phone']);

        $user = StudyIndiaUser::where('email', $email)
            ->where('phone', $phone)
            ->where('is_verified', true)
            ->where('is_active', true)
            ->first();

        if (!$user) {
            return back()
                ->withErrors([
                    'email' => 'We could not verify these details. Check your email and phone number, or register.',
                ])
                ->withInput($request->only('email', 'phone'));
        }

        session([
            self::PENDING_ID => $user->id,
            self::PENDING_EMAIL => $user->email,
            self::FLOW => 'login',
        ]);

        return $this->sendOtp($request, $user);
    }

    private function sendOtp(Request $request, StudyIndiaUser $user)
    {
        if (
            $user->otp_sent_at &&
            $user->otp_sent_at->gt(now()->subSeconds(60))
        ) {
            return redirect()->route('study-india.otp.show')
                ->with('error', 'Please wait until the countdown finishes before requesting another OTP.');
        }

        $key = 'study-india-otp:' . $user->id . ':' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return redirect()->route('study-india.otp.show')
                ->with('error', 'Too many OTP requests. Please try again later.');
        }

        RateLimiter::hit($key, 600);

        $otp = (string) random_int(100000, 999999);

        $user->update([
            'otp_hash' => Hash::make($otp),
            'otp_expires_at' => now()->addMinutes(5),
            'otp_sent_at' => now(),
            'otp_attempts' => 0,
        ]);

        try {
            Mail::raw(
                "Your Ignition Edutech Study India verification code is {$otp}.\n\n"
                    . "This code expires in 5 minutes. Never share it with anyone.",
                function ($message) use ($user) {
                    $message->to($user->email)
                        ->subject('Your Study India Verification Code');
                }
            );
        } catch (Throwable $e) {
            report($e);

            $user->update([
                'otp_hash' => null,
                'otp_expires_at' => null,
                'otp_sent_at' => null,
                'otp_attempts' => 0,
            ]);

            return redirect()->route('study-india.otp.show')
                ->with('error', 'We could not send your email OTP. Check the mail configuration or try again.');
        }

        return redirect()->route('study-india.otp.show')
            ->with('success', 'Your OTP has been sent to your email address.');
    }

    public function showOtp()
    {
        if (!session(self::PENDING_ID) || !session(self::FLOW)) {
            return redirect()->route('study-india.login')
                ->with('error', 'Please start by registering or logging in.');
        }

        $user = StudyIndiaUser::find(session(self::PENDING_ID));

        if (!$user) {
            session()->forget([
                self::PENDING_ID,
                self::PENDING_EMAIL,
                self::FLOW,
            ]);

            return redirect()->route('study-india.login')
                ->with('error', 'Your verification session has expired. Please try again.');
        }

        $resendSeconds = $user->otp_sent_at
            ? max(0, 60 - (int) now()->diffInSeconds($user->otp_sent_at, false) * -1)
            : 0;

        return view('study-india.auth.verify-otp', [
            'email' => session(self::PENDING_EMAIL),
            'resendSeconds' => $resendSeconds,
        ]);
    }

    public function resendOtp(Request $request)
    {
        if (!session(self::PENDING_ID) || !session(self::FLOW)) {
            return redirect()->route('study-india.login')
                ->with('error', 'Your verification session has expired. Please start again.');
        }

        $user = StudyIndiaUser::find(session(self::PENDING_ID));

        if (!$user) {
            return redirect()->route('study-india.login')
                ->with('error', 'Account not found. Please start again.');
        }

        return $this->sendOtp($request, $user);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => ['required', 'digits:6'],
        ]);

        $userId = session(self::PENDING_ID);
        $flow = session(self::FLOW);

        if (!$userId || !in_array($flow, ['register', 'login'], true)) {
            return redirect()->route('study-india.login')
                ->with('error', 'Your verification session has expired. Please start again.');
        }

        $user = StudyIndiaUser::find($userId);

        if (!$user || !$user->otp_hash || !$user->otp_expires_at) {
            return redirect()->route('study-india.login')
                ->with('error', 'No active OTP was found. Please request a new one.');
        }

        if ($user->otp_expires_at->isPast()) {
            $user->update([
                'otp_hash' => null,
                'otp_expires_at' => null,
            ]);

            return back()->with('error', 'Your OTP has expired. Please request a new one.');
        }

        if ($user->otp_attempts >= 5) {
            $user->update([
                'otp_hash' => null,
                'otp_expires_at' => null,
            ]);

            session()->forget([
                self::PENDING_ID,
                self::PENDING_EMAIL,
                self::FLOW,
            ]);

            return redirect()->route('study-india.login')
                ->with('error', 'Too many incorrect attempts. Please start again.');
        }

        if (!Hash::check($request->input('otp'), $user->otp_hash)) {
            $user->increment('otp_attempts');

            return back()->withErrors([
                'otp' => 'Incorrect OTP. Please check the code and try again.',
            ]);
        }

        $user->update([
            'is_verified' => true,
            'otp_hash' => null,
            'otp_expires_at' => null,
            'otp_sent_at' => null,
            'otp_attempts' => 0,
        ]);

        session()->forget([
            self::PENDING_ID,
            self::PENDING_EMAIL,
            self::FLOW,
        ]);

        $request->session()->regenerate();
        session([self::USER_ID => $user->id]);

        return redirect('/')->with(
            'study_india_auth_success',
            $flow === 'register'
                ? 'Your Study India account has been created successfully. Welcome to Ignition Edutech!'
                : 'Welcome back, ' . $user->full_name . '! You have logged in successfully.'
        );
    }

    public function logout(Request $request)
    {
        $request->session()->forget([
            self::USER_ID,
            self::PENDING_ID,
            self::PENDING_EMAIL,
            self::FLOW,
        ]);


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('study-india.login')
            ->with('success', 'You have logged out of Study India successfully.');
    }



    /*
|--------------------------------------------------------------------------
| Get the logged-in Study India user
|--------------------------------------------------------------------------
*/

    private function getStudyIndiaUser(): ?StudyIndiaUser
    {
        $userId = session(self::USER_ID);

        if (!$userId) {
            return null;
        }

        return StudyIndiaUser::where('id', $userId)
            ->where('is_active', true)
            ->where('is_verified', true)
            ->first();
    }

    /*
|--------------------------------------------------------------------------
| Your Profile
|--------------------------------------------------------------------------
*/

    public function profile()
    {
        $user = $this->getStudyIndiaUser();

        if (!$user) {
            session()->forget(self::USER_ID);

            return redirect()->route('study-india.login')
                ->with('error', 'Please log in to access your profile.');
        }

        return view('study-india.account.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = $this->getStudyIndiaUser();

        if (!$user) {
            session()->forget(self::USER_ID);

            return redirect()->route('study-india.login')
                ->with('error', 'Please log in to update your profile.');
        }

        $data = $request->validate([
            'full_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[\pL\pM]+(?:[ \'-][\pL\pM]+)*$/u',
            ],
            'phone' => [
                'required',
                'regex:/^(?!([0-9])\1{9}$)[1-9][0-9]{9}$/',
            ],
            'city' => [
                'required',
                'string',
                'max:100',
            ],

            'course_interested' => [
                'required',
                'string',
                'max:150',
            ],
        ]);

        $user->update($data);

        return redirect()->route('study-india.profile')
            ->with('success', 'Your profile has been updated successfully.');
    }

    /*
|--------------------------------------------------------------------------
| Account Settings
|--------------------------------------------------------------------------
*/

    public function settings()
    {
        $user = $this->getStudyIndiaUser();

        if (!$user) {
            session()->forget(self::USER_ID);

            return redirect()->route('study-india.login')
                ->with('error', 'Please log in to access account settings.');
        }

        return view('study-india.account.settings', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        $user = $this->getStudyIndiaUser();

        if (!$user) {
            session()->forget(self::USER_ID);

            return redirect()->route('study-india.login')
                ->with('error', 'Please log in to update account settings.');
        }

        $data = $request->validate([
            'email_notifications' => ['required', 'boolean'],
        ]);

        $user->update([
            'email_notifications' =>
            (bool) $data['email_notifications'],
        ]);

        return redirect()->route('study-india.settings')
            ->with('success', 'Your account settings have been saved.');
    }

    /*
|--------------------------------------------------------------------------
| Deactivate Account
|--------------------------------------------------------------------------
*/

    public function deactivateAccount(Request $request)
    {
        $user = $this->getStudyIndiaUser();

        if (!$user) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('study-india.login')
                ->with('error', 'Please log in before deactivating your account.');
        }

        $request->validate([
            'confirm_deactivation' => ['required', 'accepted'],
        ]);

        // Keep the account and its existing data in the database.
        $user->update([
            'is_active' => false,
        ]);

        // End the current session.
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('study-india.login')
            ->with('success', 'Your Study India account has been deactivated.');
    }

    
public function updateProfilePhoto(Request $request)
{
    $user = $this->getStudyIndiaUser();

    if (!$user) {
        return redirect()
            ->route('study-india.login')
            ->withErrors([
                'profile_photo' => 'Please log in to update your profile photo.',
            ]);
    }

    $request->validate([
        'profile_photo' => [
            'required',
            'image',
            'mimes:jpg,jpeg,png,webp',
            'max:2048',
        ],
    ]);

    $path = $request->file('profile_photo')
        ->store('study-india/profile-photos', 'public');

    if ($user->profile_photo) {
        Storage::disk('public')->delete($user->profile_photo);
    }

    $user->profile_photo = $path;
    $user->save();

    return back()->with('success', 'Profile photo updated successfully.');
}

}
