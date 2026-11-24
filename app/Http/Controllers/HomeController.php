<?php

namespace App\Http\Controllers;

use App\Models\StudyAbroadUniversity;
use App\Data\CounsellingData;
use App\Models\ApplicationMasterData;


class HomeController extends Controller
{
    public function index()

    {
        $studyAbroadUniversities = StudyAbroadUniversity::where('status', 1)
            ->get()
            ->groupBy('country');
        $courses = $this->getActiveCourses();
        $siAllCourseData = config('study_india_coursesData.courses', []);

        return view('welcome', compact('studyAbroadUniversities', 'siAllCourseData', 'courses'));
    }



    public function about()
    {
          $courses = $this->getActiveCourses();
        return view('about',  compact('courses'));
    }
    public function services()
    {
         $courses = $this->getActiveCourses();
        return view('services',   compact('courses'));
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
        $courses = $this->getActiveCourses();

        return view('nmims-distance-education-online-degree-programs', compact('courses'));
    }
    public function amity_university_online_ug_pg_courses()
    {
        $courses = $this->getActiveCourses();
        return view('amity-university-online-ug-pg-courses', compact('courses'));
    }
    public function manipal_online()
    {
        $courses = $this->getActiveCourses();
        return view('manipal-online', compact('courses'));
    }
    public function smu()
    {
        $courses = $this->getActiveCourses();
        return view('smu', compact('courses'));
    }
    public function dr_d_y_patil_pune()
    {
        $courses = $this->getActiveCourses();

        return view('dr-d-y-patil-pune', compact('courses'));
    }
    public function vellore_institute_of_technology()
    {
        $courses = $this->getActiveCourses();

        return view('vellore-institute-of-technology', compact('courses'));
    }
    public function jain_online()
    {
        $courses = $this->getActiveCourses();
        return view('jain-online', compact('courses'));
    }
    public function nldalmia_online()
    {
        $courses = $this->getActiveCourses();

        return view('nldalmia-online', compact('courses'));
    }
    public function vivekananda_global_university_online()
    {
        $courses = $this->getActiveCourses();
        return view('vivekananda-global-university-online', compact('courses'));
    }
    public function gla_university_online()
    {
        $courses = $this->getActiveCourses();
        return view('gla-university-online', compact('courses'));
    }
    public function university_of_massachusetts_global_online()
    {
        $courses = $this->getActiveCourses();
        return view('university-of-massachusetts-global-online', compact('courses'));
    }
    public function bennett_university()
    {
        $courses = $this->getActiveCourses();
        return view('bennett-university', compact('courses'));
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
        $courses = $this->getActiveCourses();
        return view('vit-online-degree-courses', compact('courses'));
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
        $courses = $this->getActiveCourses();
        return view('dmit-test', compact('courses'));
    }
    public function career_counseling()
    {
        $courses = $this->getActiveCourses();

        return view('career-counselling', compact('courses'));
    }


    public function psychometric_assessment()
    {

        $courses = $this->getActiveCourses();
        return view('psychometric_assessment', [
            'page' => CounsellingData::psychometric_assessment(),
            'courses' => $courses,

        ]);
    }
    // public function study_abroad()
    // {
        
    //     return view('study_abroad');
    // }

 public function new_footer()
    {

         $courses = $this->getActiveCourses();
        return view('new-footer', compact('courses'));

    }


    private function getActiveCourses()
    {
        return ApplicationMasterData::where('type', 'course')
            ->where('status', 1)
            ->orderBy('name')
            ->pluck('name');
    }
    public function welcome()
    {
        $courses = $this->getActiveCourses();

        return view('welcome', compact('courses'));
    }
}
