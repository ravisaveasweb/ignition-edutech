<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(StoreLeadRequest $request)
    {

        $enquiry = Enquiry::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'mobile'  => $request->mobile,
            'program' => $request->course_name,
            'source'  => $request->source,
        ]);

        Mail::to(config('mail.admin_email'))
            ->send(new EnquiryMail($enquiry));

        return response()->json([
            'success' => true,
            'message' => 'Thank you! We will contact you shortly.'
        ]);
    }
}
