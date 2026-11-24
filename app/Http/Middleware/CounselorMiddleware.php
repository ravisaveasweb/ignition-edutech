<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CounselorMiddleware
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {

        if (! auth()->check()) {
            return redirect('/counselor/login');
        }

        if (auth()->user()->role !== 'counselor') {
            abort(403);
        }

        return $next($request);
    }
}
