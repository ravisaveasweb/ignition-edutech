<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UniversityApplicationFormController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\CorporateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudyAbroadApplicationController;
use App\Http\Controllers\StudyAbroadVisaController;
use App\Http\Controllers\StudyAbroadGlobalScholarshipController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/our-process', [HomeController::class, 'our_process'])->name('our-process');
Route::get('/online-learning-overview', [HomeController::class, 'online_learning_overview'])->name('online-learning-overview');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Universities
Route::get('/universities/nmims-distance-education-online-degree-programs', [HomeController::class, 'nmims_distance_education_online_degree_programs'])->name('nmims-distance-education-online-degree-programs');
Route::get('/universities/vit-online-degree-courses', [HomeController::class, 'vit_online_degree_courses'])->name('vit-online-degree-courses');
Route::get('/universities/vellore-institute-of-technology', [HomeController::class, 'vellore_institute_of_technology'])->name('vellore-institute-of-technology');
Route::get('/universities/amity-university-online-ug-pg-courses', [HomeController::class, 'amity_university_online_ug_pg_courses'])->name('amity-university-online-ug-pg-courses');
Route::get('/universities/manipal-online', [HomeController::class, 'manipal_online'])->name('manipal-online');
Route::get('/universities/smu', [HomeController::class, 'smu'])->name('smu');
Route::get('/universities/dr-d-y-patil-pune', [HomeController::class, 'dr_d_y_patil_pune'])->name('dr-d-y-patil-pune');
Route::get('/universities/jain-online', [HomeController::class, 'jain_online'])->name('jain-online');
Route::get('/universities/nldalmia-online', [HomeController::class, 'nldalmia_online'])->name('nldalmia-online');
Route::get('/universities/vivekananda-global-university-online', [HomeController::class, 'vivekananda_global_university_online'])->name('vivekananda-global-university-online');
Route::get('/universities/gla-university-online', [HomeController::class, 'gla_university_online'])->name('gla-university-online');
Route::get('/universities/university-of-massachusetts-global-online', [HomeController::class, 'university_of_massachusetts_global_online'])->name('university-of-massachusetts-global-online');
Route::get('/universities/bennett-university', [HomeController::class, 'bennett_university'])->name('bennett-university');
// Route::get('/courses', [HomeController::class, 'courses'])->name('courses');

Route::get('/bloglist', [HomeController::class, 'bloglist'])->name('bloglist');
Route::get('/bloglist/nmims-distance-education-admission-2026-process-fees', [HomeController::class, 'nmims_distance_education_admission_2026_process_fees'])->name('nmims-distance-education-admission-2026-process-fees');
Route::get('/bloglist/best-online-mba-india-universities', [HomeController::class, 'best_online_mba_india_universities'])->name('best-online-mba-india-universities');
Route::get('/bloglist/blog-career-options-after-10-12', [HomeController::class, 'blog_career_options_after_10_12'])->name('blog-career-options-after-10-12');
Route::get('/bloglist/blog-school-admissions-board-selection-guide', [HomeController::class, 'blog_school_admissions_board_selection_guide'])->name('blog-school-admissions-board-selection-guide');
Route::get('/bloglist/blog-ultimate-study-abroad-guide', [HomeController::class, 'blog_ultimate_study_abroad_guide'])->name('blog-ultimate-study-abroad-guide');

Route::get('/university-application-form', [HomeController::class, 'university_application_form'])->name('university-application-form');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');

Route::get('/courses/amity-online-ba-admission', [HomeController::class, 'amity_online_ba_admission'])->name('amity-online-ba-admission');
Route::get('/courses/amity-online-bba-admission', [HomeController::class, 'amity_online_bba_admission'])->name('amity-online-bba-admission');
Route::get('/courses/amity-online-mba-admission', [HomeController::class, 'amity_online_mba_admission'])->name('amity-online-mba-admission');
Route::get('/courses/vit-online-mba-admission', [HomeController::class, 'vit_online_mba_admission'])->name('vit-online-mba-admission');
Route::get('/courses/nmims-online-mba-admission', [HomeController::class, 'nmims_online_mba_admission'])->name('nmims-online-mba-admission');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::post('/university-application-form', [UniversityApplicationFormController::class, 'store'])->name('university-application-form.store');
Route::post('/contact-form', [ContactFormController::class, 'store'])->name('contact-form.store');

Route::get('/counselling/dmit-test', [HomeController::class, 'd_mit_test'])->name('dmit-test');
Route::get('/counselling/career-counselling', [HomeController::class, 'career_counseling'])->name('career-counselling');
Route::get('/study-abroad', [HomeController::class, 'study_abroad'])->name('study-abroad');

// --- Online Education ---------------------------------------------------
Route::get('/online-undergraduate-program', [ProgramsController::class, 'undergraduate'])
    ->name('programs.undergraduate');

Route::get('/online-mba-program', [ProgramsController::class, 'mba'])
    ->name('programs.mba');

Route::get('/executive-program', [ProgramsController::class, 'executive'])
    ->name('programs.executive');

// --- Corporate ------------------------------------------------------------
Route::get('/corporate-education-partnership', [CorporateController::class, 'education'])
    ->name('corporate.education');

Route::get('/corporate-training', [CorporateController::class, 'training'])
    ->name('corporate.training');

Route::get('/corporate-recruitment-training', [CorporateController::class, 'recruitment'])
    ->name('corporate.recruitment');

Route::get('/exams/{slug}', [ExamController::class, 'show'])
    ->name('exams.show');


    

    /*
|--------------------------------------------------------------------------
| Study Abroad Application
|--------------------------------------------------------------------------
*/


Route::get('/study-abroad/application', [
    StudyAbroadApplicationController::class,
    'create'
])->name('study-abroad.application');

Route::post('/study-abroad/application/personal', [
    StudyAbroadApplicationController::class,
    'savePersonalDetails'
])->name('study-abroad.personal');

Route::get('/study-abroad/application/step-2', [
    StudyAbroadApplicationController::class,
    'step2'
])->name('study-abroad.step2');

Route::post('/study-abroad/application/education', [
    StudyAbroadApplicationController::class,
    'saveEducationPreferences'
])->name('study-abroad.education');


Route::get('/study-abroad/application/step-3', [
    StudyAbroadApplicationController::class,
    'step3'
])->name('study-abroad.step3');

Route::post('/study-abroad/application/past-education', [
    StudyAbroadApplicationController::class,
    'savePastEducation'
])->name('study-abroad.past-education');

Route::get('/study-abroad/application/otp', [
    StudyAbroadApplicationController::class,
    'otp'
])->name('study-abroad.otp');

Route::post('/study-abroad/application/otp/verify', [
    StudyAbroadApplicationController::class,
    'verifyOtp'
])->name('study-abroad.otp.verify');

Route::get('/study-abroad/application/completed', [
    StudyAbroadApplicationController::class,
    'completed'
])->name('study-abroad.completed');



Route::get('/counselling/psychometric_assessment', [HomeController::class, 'psychometric_assessment'])
    ->name('counselling.psychometric_assessment');

Route::get(
    '/study-abroad',
    [StudyAbroadApplicationController::class, 'create']
)->name('study-abroad.application');

Route::get(
    '/study-abroad/otp',
    [StudyAbroadApplicationController::class, 'otp']
)->name('study-abroad.otp');

Route::post(
    '/study-abroad/verify-otp',
    [StudyAbroadApplicationController::class, 'verifyOtp']
)->name('study-abroad.verify-otp');

Route::get(
    '/study-abroad/completed',
    [StudyAbroadApplicationController::class, 'completed']
)->name('study-abroad.completed');
    

Route::get('/study-abroad', function () {
    return view('study_abroad');
})->name('study-abroad');  

Route::get('/study-abroad', [StudyAbroadApplicationController::class, 'studyAbroad'])
    ->name('study-abroad');

Route::get('/world-universities', [StudyAbroadApplicationController::class, 'worldUniversities'])
    ->name('world-universities');


Route::get('study-abroad/auth', [StudyAbroadApplicationController::class, 'showAuth'])->name('study-abroad.auth');
Route::get('study-abroad/login', [StudyAbroadApplicationController::class, 'showLoginForm'])->name('study-abroad.login');
Route::post('study-abroad/login', [StudyAbroadApplicationController::class, 'sendLoginOtp'])->name('study-abroad.login.submit');
Route::get('study-abroad/login-otp', [StudyAbroadApplicationController::class, 'showLoginOtpForm'])->name('study-abroad.login.otp');
Route::post('study-abroad/login-otp', [StudyAbroadApplicationController::class, 'verifyLoginOtp'])->name('study-abroad.login.verify');
Route::post('study-abroad/otp/resend', [StudyAbroadApplicationController::class, 'resendOtp'])
    ->name('study-abroad.otp.resend');

    Route::post('study-abroad/login-otp/resend', [StudyAbroadApplicationController::class, 'resendLoginOtp'])
    ->name('study-abroad.login.otp.resend');
// Register / Form Routes
Route::get('study-abroad/application', [StudyAbroadApplicationController::class, 'create'])->name('study-abroad.application');

// Visa Process
Route::get(
    'study-abroad/visa-process',
    [StudyAbroadVisaController::class, 'index']
)->name('study-abroad.visa-process');

Route::get(
    'study-abroad/visa-process/{country}',
    [StudyAbroadVisaController::class, 'show']
)->name('study-abroad.visa-guide');


// Route::get('/study-abroad/global-scholarships', function () {
//     return view('study-abroad.global-scholarship');
// })->name('study-abroad.global-scholarships');


Route::get('/study-abroad/global-scholarships', [StudyAbroadGlobalScholarshipController::class, 'index'])
    ->name('study-abroad.global-scholarships');

Route::get('/study-abroad/global-scholarships/{scholarship_id}', [StudyAbroadGlobalScholarshipController::class, 'show'])
    ->name('study-abroad.global-scholarship.show');