<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadVisaCountry;
use Illuminate\Http\Request;

class StudyAbroadVisaController extends Controller
{
    // CHANGE: Add Request $request and use paginate(12) for country pagination
    public function index(Request $request)
    {
        // ADD: Get country search value from URL
        $search = $request->input('search');

        // CHANGE: Fetch only 12 countries per page and support database search
        $countries = StudyAbroadVisaCountry::where('status', 1)
            ->with('visaGuide')
            ->when($search, function ($query) use ($search) {
                $query->where('country', 'like', '%' . $search . '%');
            })
            ->orderBy('country')
            ->paginate(12)
            ->withQueryString();

        return view(
            'study-abroad.visa-process',
            compact('countries', 'search')
        );
    }

    public function show($country)
    {
        $visaCountry = StudyAbroadVisaCountry::where(
            'country_code',
            strtoupper($country)
        )
        ->where('status', 1)
        ->with([
            'visaGuide.steps',
            'visaGuide.documents',
            'visaGuide.faqs',
        ])
        ->firstOrFail();

        return view(
            'study-abroad.visa-guide',
            compact('visaCountry')
        );
    }
}