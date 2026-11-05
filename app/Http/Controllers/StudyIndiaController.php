<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyIndiaController extends Controller
{
    public function locationPage($type, $slug)
    {
        // Allow only city and state
        if (!in_array($type, ['city', 'state'])) {
            return redirect()->route('home');
        }


        // Prepare the expected Blade view name
        $viewName = "study-india.location.{$type}.{$slug}";

        // If the page exists, open it
        if (view()->exists($viewName)) {
            return view($viewName, compact('type', 'slug'));
        }

        // If the page does not exist, go to homepage
        return redirect()->route('home');
    }
}