<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudyAbroadOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $otp;

    public function __construct(string $otp)
    {
        $this->otp = $otp;
    }

    public function build()
    {
        return $this
            ->subject('Your Study Abroad Verification OTP')
            ->view('emails.study-abroad-otp');
    }
}