<?php

namespace App\Mail;

use App\Models\UniversityApplicationForm;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UniversityApplicationFormMail extends Mailable
{
    public $universityApplicationForm;

    public function __construct(UniversityApplicationForm $universityApplicationForm)
    {
        $this->universityApplicationForm = $universityApplicationForm;
    }

    public function build()
    {
        return $this->subject('New University Application')
            ->view('mail.university-application-form');
    }
}
