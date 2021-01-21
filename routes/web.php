<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\UserDetailController;

// Programs
use App\Http\Controllers\Programs\SchoolProgramController;
use App\Http\Controllers\Programs\CollegeProgramController;
use App\Http\Controllers\Programs\UniversityProgramController;

// Route::view('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome')->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('user-details-form', 'pages.user.user-details-form')->name('user-details-form');
Route::post('user-details-form', [UserDetailController::class, 'store'])->name('user-details-submit');


Route::view('programs', 'pages.programs.programs')->name('programs');
Route::view('blogs', 'pages.blogs')->name('blogs');
Route::view('fees', 'pages.fees')->name('fees');
Route::view('team', 'pages.team')->name('team');
Route::view('terms-of-use', 'pages.terms_of_use')->name('terms.of.use');
Route::view('company-information', 'pages.company_information')->name('company.information');
Route::view('cookie-policy', 'pages.cookie_policy')->name('cookie.policy');
Route::view('follow-us', 'pages.follow_us')->name('follow.us');
Route::view('help-us', 'pages.help_us')->name('help.us');
Route::view('help-your-student', 'pages.help_your_student')->name('help.student');
Route::view('how-we-work-with-recruitment-partners', 'pages.how_we_work_with_recruitment_partners')->name('work.with.recruitment.partners');
Route::view('increase-your-presence', 'pages.increase_your_presence')->name('increase.presence');
Route::view('our-story', 'pages.our_story')->name('our.story');
Route::view('press-contact', 'pages.press_contact')->name('press.contact');
Route::view('student-success-story', 'pages.student_success_story')->name('student.success.story');
Route::view('terms-and-conditions', 'pages.terms_and_conditions')->name('terms.and.conditions');
Route::view('upcoming-events', 'pages.upcoming_events')->name('upcoming.events');


// Route::view('school-programs', 'pages.programs.schools')->name('school.programs');
Route::get('school-programs', [SchoolProgramController::class, 'index'])->name('school.programs');
Route::post('school-programs', [SchoolProgramController::class, 'store'])->name('school.program.apply');


Route::get('college-programs', [CollegeProgramController::class, 'index'])->name('college.programs');
Route::post('college-programs', [CollegeProgramController::class, 'store'])->name('college.program.apply');

Route::get('university-programs', [UniversityProgramController::class, 'index'])->name('university.programs');
Route::post('university-programs', [UniversityProgramController::class, 'store'])->name('university.program.apply');


