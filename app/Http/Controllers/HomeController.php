<?php

namespace App\Http\Controllers;
use App\Models\StudyAbroadUniversity;
use App\Data\CounsellingData;


class HomeController extends Controller
{
    public function index()
    
    {
 $studyAbroadUniversities = StudyAbroadUniversity::where('status', 1)
        ->get()
        ->groupBy('country');

    return view('welcome', compact('studyAbroadUniversities'));
    }
    
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function our_process()
    {
        return view('our-process');
    }
    public function courses()
    {
        return view('courses');
    }
    public function online_learning_overview()
    {
        return view('online-learning-overview');
    }
    public function contact()
    {
        return view('contact');
    }
    public function nmims_distance_education_online_degree_programs()
    {
        return view('nmims-distance-education-online-degree-programs');
    }
    public function amity_university_online_ug_pg_courses()
    {
        return view('amity-university-online-ug-pg-courses');
    }
    public function manipal_online()
    {
        return view('manipal-online');
    }
    public function smu()
    {
        return view('smu');
    }
    public function dr_d_y_patil_pune()
    {
        return view('dr-d-y-patil-pune');
    }
    public function vellore_institute_of_technology()
    {
        return view('vellore-institute-of-technology');
    }
    public function jain_online()
    {
        return view('jain-online');
    }
    public function nldalmia_online()
    {
        return view('nldalmia-online');
    }
    public function vivekananda_global_university_online()
    {
        return view('vivekananda-global-university-online');
    }
    public function gla_university_online()
    {
        return view('gla-university-online');
    }
    public function university_of_massachusetts_global_online()
    {
        return view('university-of-massachusetts-global-online');
    }
    public function bennett_university()
    {
        return view('bennett-university');
    }
    public function bloglist()
    {
        return view('bloglist');
    }
    public function nmims_distance_education_admission_2026_process_fees()
    {
        return view('nmims-distance-education-admission-2026-process-fees');
    }
    public function best_online_mba_india_universities()
    {
        return view('best-online-mba-india-universities');
    }
    public function blog_career_options_after_10_12()
    {
        return view('blog-career-options-after-10-12');
    }
    public function blog_school_admissions_board_selection_guide()
    {
        return view('blog-school-admissions-board-selection-guide');
    }
    public function blog_ultimate_study_abroad_guide()
    {
        return view('blog-ultimate-study-abroad-guide');
    }
    public function university_application_form()
    {
        return view('university-application-form');
    }
    public function privacy_policy()
    {
        return view('privacy-policy');
    }
    public function amity_online_ba_admission()
    {
        return view('amity-online-ba-admission');
    }
    public function amity_online_bba_admission()
    {
        return view('amity-online-bba-admission');
    }
    public function amity_online_mba_admission()
    {
        return view('amity-online-mba-admission');
    }
    public function vit_online_degree_courses()
    {
        return view('vit-online-degree-courses');
    }
    public function vit_online_mba_admission()
    {
        return view('vit-online-mba-admission');
    }
    public function nmims_online_mba_admission()
    {
        return view('nmims-online-mba-admission');
    }
    public function d_mit_test()
    {
        return view('dmit-test'); 
    }
    public function career_counseling()
    {
        return view('career-counselling');
    }


    public function psychometric_assessment()
    {
        return view('psychometric_assessment', [
            'page' => CounsellingData::psychometric_assessment(),
        ]);
    }
    public function study_abroad()
    {
        return view('study_abroad');
    }
}


