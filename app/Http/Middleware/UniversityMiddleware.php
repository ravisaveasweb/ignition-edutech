<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UniversityMiddleware
{
    public function handle(
        Request $request,
        Closure $next
    ): Response {

        if (!auth()->check()) {
            return redirect('/university/login');
        }

        if (auth()->user()->role !== 'university') {
            abort(403);
        }

        return $next($request);
    }
}
