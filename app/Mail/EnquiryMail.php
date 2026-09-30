<?php

namespace App\Mail;

use App\Models\Enquiry;
use Illuminate\Mail\Mailable;
    
class EnquiryMail extends Mailable
{
    public $enquiry;

    public function __construct(Enquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function build()
    {
        return $this->subject('New Website Enquiry')
            ->view('mail.enquiry');
    }
}
