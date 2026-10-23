<?php

namespace App\Http\Middleware;

use App\Models\StudyAbroadUser;
use App\Models\StudyIndiaUser;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check Study India login
        $studyIndiaId = session('study_india_user_id');

        if (
            $studyIndiaId &&
            StudyIndiaUser::whereKey($studyIndiaId)->exists()
        ) {
            return $next($request);
        }

        // Check Study Abroad login
        $studyAbroadId = session('study_abroad_user_id');

        if (
            $studyAbroadId &&
            StudyAbroadUser::whereKey($studyAbroadId)->exists()
        ) {
            return $next($request);
        }

        // Redirect guests to the Study India login page
        return redirect()->route('study-india.login', [
            'redirect' => $request->fullUrl(),
        ]);
    }
}
