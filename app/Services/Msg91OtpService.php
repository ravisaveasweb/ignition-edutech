<?php

namespace App\Services;

class Msg91OtpService
{
    public function sendOtp(string $phone): array
    {
        // Development OTP
        $otp = '1234';

        session([
            'test_otp' => $otp,
            'test_otp_phone' => $phone,
        ]);

        return [
            'success' => true,
            'message' => 'Test OTP generated.',
            'otp' => $otp,
        ];
    }

    public function verifyOtp(string $phone, string $otp): bool
    {
        return
            session('test_otp_phone') === $phone &&
            session('test_otp') === $otp;
    }
}