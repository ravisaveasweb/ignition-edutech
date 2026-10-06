<?php

namespace App\Http\Controllers;

use App\Models\GlobalScholarshipData;
use Illuminate\Http\Request;

class StudyAbroadGlobalScholarshipController extends Controller
{
    public function index(Request $request)
    {
        $query = GlobalScholarshipData::query();

        // Search
        if ($request->filled('search')) {
            $search = trim($request->search);

            $query->where(function ($q) use ($search) {
                $q->where('scholarship_name', 'like', "%{$search}%")
                    ->orWhere('provider', 'like', "%{$search}%")
                    ->orWhere('host_country', 'like', "%{$search}%")
                    ->orWhere('subject_areas', 'like', "%{$search}%")
                    ->orWhere('degree_level', 'like', "%{$search}%")
                    ->orWhere('description_en', 'like', "%{$search}%")
                    ->orWhere('eligible_countries', 'like', "%{$search}%")
                    ->orWhere('target_groups', 'like', "%{$search}%")
                    ->orWhere('study_purpose', 'like', "%{$search}%");
            });
        }

        // Country filter
        if ($request->filled('country')) {
            $countriesFilter = array_filter((array) $request->country);

            $query->where(function ($q) use ($countriesFilter) {
                foreach ($countriesFilter as $country) {
                    $q->orWhere('host_country', 'like', '%' . $country . '%');
                }
            });
        }

        // Degree filter
        if ($request->filled('degree')) {
            $degreesFilter = array_filter((array) $request->degree);

            $query->where(function ($q) use ($degreesFilter) {
                foreach ($degreesFilter as $degree) {
                    $q->orWhereRaw(
                        "CONCAT('|', degree_level, '|') LIKE ?",
                        ['%|' . $degree . '|%']
                    );
                }
            });
        }

        // Subject filter
        if ($request->filled('subject')) {
            $subjectsFilter = array_filter((array) $request->subject);

            $query->where(function ($q) use ($subjectsFilter) {
                foreach ($subjectsFilter as $subject) {
                    $q->orWhereRaw(
                        "CONCAT('|', subject_areas, '|') LIKE ?",
                        ['%|' . $subject . '|%']
                    );
                }
            });
        }

        // Funding filter
        if ($request->filled('funding')) {
            $fundingsFilter = array_filter((array) $request->funding);

            $query->where(function ($q) use ($fundingsFilter) {
                foreach ($fundingsFilter as $funding) {
                    $q->orWhere('scholarship_amount', 'like', '%' . $funding . '%');
                }
            });
        }

        // Sorting
        switch ($request->get('sort')) {
            case 'newest':
                $query->latest();
                break;

            case 'funding':
                $query->orderBy('scholarship_amount');
                break;

            case 'duration':
                $query->orderBy('duration');
                break;

            default:
                $query->orderBy('id', 'desc');
                break;
        }

        // Paginated scholarships
        $scholarships = $query
            ->paginate(10)
            ->withQueryString();

        // Countries
        $countries = GlobalScholarshipData::query()
            ->whereNotNull('host_country')
            ->where('host_country', '!=', '')
            ->select('host_country')
            ->distinct()
            ->orderBy('host_country')
            ->pluck('host_country');

        // Degrees
        $degrees = GlobalScholarshipData::query()
            ->whereNotNull('degree_level')
            ->where('degree_level', '!=', '')
            ->select('degree_level')
            ->distinct()
            ->orderBy('degree_level')
            ->pluck('degree_level');

        // Subjects
        $subjects = GlobalScholarshipData::query()
            ->whereNotNull('subject_areas')
            ->where('subject_areas', '!=', '')
            ->select('subject_areas')
            ->distinct()
            ->orderBy('subject_areas')
            ->pluck('subject_areas');

        // Funding
        $fundings = GlobalScholarshipData::query()
            ->whereNotNull('scholarship_amount')
            ->where('scholarship_amount', '!=', '')
            ->select('scholarship_amount')
            ->distinct()
            ->orderBy('scholarship_amount')
            ->pluck('scholarship_amount');

        // Destination counts
        $destinationCounts = GlobalScholarshipData::query()
            ->selectRaw('host_country, COUNT(*) as total')
            ->whereNotNull('host_country')
            ->where('host_country', '!=', '')
            ->groupBy('host_country')
            ->orderByDesc('total')
            ->get();

        // Total scholarships
        $totalScholarships = GlobalScholarshipData::count();

        return view('study-abroad.global-scholarship', compact(
            'scholarships',
            'countries',
            'degrees',
            'subjects',
            'fundings',
            'destinationCounts',
            'totalScholarships'
        ));
    }

    public function show(string $scholarship_id)
    {
        $scholarship = GlobalScholarshipData::where(
            'scholarship_id',
            $scholarship_id
        )->firstOrFail();

        return view(
            'study-abroad.global-scholarship-details',
            compact('scholarship')
        );
    }
}