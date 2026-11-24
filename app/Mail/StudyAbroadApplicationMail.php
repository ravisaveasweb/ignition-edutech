<?php

namespace App\Mail;

use App\Models\StudyAbroadApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudyAbroadApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public StudyAbroadApplication $application;

    public function __construct(
        StudyAbroadApplication $application
    ) {
        $this->application = $application;
    }

    public function build()
    {
        return $this
            ->subject(
                'New Study Abroad Application - ' .
                $this->application->personalDetails->full_name
            )
            ->view('emails.study-abroad-application');
    }
}