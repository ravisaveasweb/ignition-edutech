<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniversityApplicationRequest;
use App\Mail\UniversityApplicationFormMail;
use App\Models\UniversityApplicationForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UniversityApplicationFormController extends Controller
{
    public function store(UniversityApplicationRequest $request)
    {
        $enquiry = UniversityApplicationForm::create([
            'first_name' => $request->first_name,

            'last_name' => $request->last_name,

            'email' => $request->email,

            'phone' => $request->phone,

            'programme' => $request->programme,

            'enrollment' => $request->enrollment,

            'city' => $request->city,

            'message' => $request->message,

            'consent' => $request->consent,
        ]);

        Mail::to(config('mail.admin_email'))
            ->send(new UniversityApplicationFormMail($enquiry));

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully.'
        ]);
    }
}
