<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyIndiaController extends Controller
{
    public function locationPage($type, $slug)
    {
        // Allow only city and state
        if (!in_array($type, ['city', 'state'])) {
            return redirect()->route('/home');
        }

        // Available city and state pages
        $availableLocations = [
            'city' => [
                // Add city pages here when they are created
                
            ],

            'state' => [
                // Add state pages here when they are created
            ],
        ];

        // Check whether the requested page exists
        if (!in_array($slug, $availableLocations[$type])) {
            return redirect()->route('home');
        }

        // Display the location page
        return view('study-india.location', compact('type', 'slug'));
    }
}