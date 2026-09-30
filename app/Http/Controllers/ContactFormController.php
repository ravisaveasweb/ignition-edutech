<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        $contactformdata = ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        Mail::to(config('mail.admin_email'))
            ->send(new ContactFormMail($contactformdata));

        return response()->json([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully.'
        ]);
    }
}
