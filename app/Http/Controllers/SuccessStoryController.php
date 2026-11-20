<?php

namespace App\Http\Controllers;

use App\Models\ApplicationMasterData;
use App\Models\SuccessStory;
use App\Models\SuccessStoryReview;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $courses = $this->getActiveCourses();

        $approvedStories = SuccessStory::where('status', 1)
            ->where('is_approved', 1);

        $stories = (clone $approvedStories)
            ->orderBy('sort_order')
            ->latest()
            ->paginate(9);

        $featuredStory = (clone $approvedStories)
            ->where('is_featured', 1)
            ->latest()
            ->first();

        $totalStories = (clone $approvedStories)->count();

        $totalStudents = $totalStories;

        $totalUniversities = (clone $approvedStories)
            ->whereNotNull('college_name')
            ->where('college_name', '!=', '')
            ->distinct()
            ->count('college_name');

        $totalCountries = (clone $approvedStories)
            ->whereNotNull('country')
            ->where('country', '!=', '')
            ->distinct()
            ->count('country');

        // Fetch approved student reviews
        $studentReviews = SuccessStoryReview::where('status', 1)
            ->where('is_approved', 1)
            ->where('review_type', 'review')
            ->orderBy('sort_order')
            ->latest()
            ->take(3)
            ->get();

        // Fetch approved testimonials
        $testimonials = SuccessStoryReview::where('status', 1)
            ->where('is_approved', 1)
            ->where('review_type', 'testimonial')
            ->orderBy('sort_order')
            ->latest()
            ->take(3)
            ->get();


        return view('success-stories.index', compact(
            'courses',
            'stories',
            'featuredStory',
            'totalStories',
            'totalStudents',
            'totalUniversities',
            'totalCountries',
            'studentReviews',
            'testimonials'
        ));
    }

    private function getActiveCourses()
    {
        return ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');
    }
}
