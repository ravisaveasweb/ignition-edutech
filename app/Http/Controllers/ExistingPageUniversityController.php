<?php

namespace App\Http\Controllers;

use App\Models\University;

class ExistingPageUniversityController extends Controller
{
    public function index()
    {
        $universities = University::query()
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($universities);
    }
}