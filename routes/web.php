<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\IntegrationController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\General\GeneralController;
use App\Http\Controllers\Tutor\HomeController as TutorHomeController;
use App\Http\Controllers\Tutor\BookingController;
use App\Http\Controllers\Tutor\CalendarController;
use App\Http\Controllers\Tutor\ClassController;
use App\Http\Controllers\Tutor\SubjectController as TutorSubjectController;
use App\Http\Controllers\Tutor\HistoryController;
use App\Http\Controllers\Tutor\PaymentController;
use App\Http\Controllers\Tutor\SettingController as TutorSettingController;
use App\Http\Controllers\Tutor\AssessmentController;
use App\Http\Controllers\Tutor\ProfileController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use App\Http\Controllers\Student\TutorController as StudentTutorController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admins',[AdminLogin::class,'index']);
Route::post('admin/login',[AdminLogin::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminLogin::class,'logout'])->name('admin.logout');

Route::group(['prefix' => '/admin','middleware' => ['auth','admin']],function () {

    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');

    Route::get('/tutor',[TutorController::class,'index'])->name('admin.tutor');
    Route::get('tutor/request/{id}/{assess_id}',[TutorController::class,'tutorRequest'])->name('admin.tutorRequest');
    Route::get('tutor/assessment/{assessment_id}',[TutorController::class,'tutorAssessment'])->name('admin.tutotAssessment');
    Route::post('tutor/verify-assessment',[TutorController::class,'verifyAssessment'])->name('admin.verifyAssessment');
    Route::post('tutor/verify-tutor',[TutorController::class,'verifyTutor'])->name('admin.verifyTutor');


    Route::get('/student',[StudentController::class,'index'])->name('admin.student');
    Route::get('/student/profile/{id}',[StudentController::class,'profile'])->name('admin.studentProfile');

    Route::get('/course',[CourseController::class,'index'])->name('admin.course');
    Route::get('/subject',[SubjectController::class,'index'])->name('admin.subject');
    Route::get('/website',[WebsiteController::class,'index'])->name('admin.website');
    Route::get('/report',[ReportController::class,'index'])->name('admin.report');
    Route::get('/integration',[IntegrationController::class,'index'])->name('admin.integration');

    Route::get('/staff',[StaffController::class,'index'])->name('admin.staff');
    Route::post('/staff/insert',[StaffController::class,'insertStaff'])->name('admin.insertStaff');
    Route::get('/staff/profile/{id}',[StaffController::class,'staffProfile'])->name('admin.staffProfile');



    Route::get('/knowledge',[KnowledgeController::class,'index'])->name('admin.knowledge');
    Route::get('/support',[SupportController::class,'index'])->name('admin.support');
    Route::get('/setting',[SettingController::class,'index'])->name('admin.setting');
    // Route to get all subjects form api call

    Route::get('/api_subjects',[SubjectController::class,'getSubjectsFromApi']);
});

/*
|--------------------------------------------------------------------------
| Tutor Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => '/tutor','middleware' => ['auth','tutor']],function () {

    Route::get('/dashboard',[TutorHomeController::class,'index'])->name('tutor.dashboard');
    Route::get('/booking',[BookingController::class,'index'])->name('tutor.booking');
    Route::get('/classroom',[ClassController::class,'index'])->name('tutor.classroom');
    Route::get('/calendar',[CalendarController::class,'index'])->name('tutor.calendar');
    Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/subjects',[TutorSubjectController::class,'index'])->name('tutor.subject');
    Route::get('/settings',[TutorSettingController::class,'index'])->name('tutor.settings');
    Route::get('/profile',[ProfileController::class,'index'])->name('tutor.profile');
    Route::view('/skip','tutor.skip')->name('skip');
    Route::get('/assessment/{id}',[AssessmentController::class,'index'])->name('tutor.test');
    Route::post('/assessment',[AssessmentController::class,'store'])->name('tutor.assessment');
});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => '/student','middleware' => ['auth','student']],function () {

    Route::get('/dashboard',[StudentHomeController::class,'index'])->name('student.dashboard');
    // Route::get('/booking',[BookingController::class,'index'])->name('tutor.booking');
    // Route::get('/classroom',[ClassController::class,'index'])->name('tutor.classroom');
    // Route::get('/calendar',[CalendarController::class,'index'])->name('tutor.calendar');
    // Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    // Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/tutor',[StudentTutorController::class,'index'])->name('student.tutor');
    // Route::get('/settings',[TutorSettingController::class,'index'])->name('tutor.settings');
    Route::get('/profile',[StudentProfileController::class,'index'])->name('student.profile');

});
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes(['verify' => true]);
//Google
Route::get('/google/redirect', [LoginController::class,'redirectGoogle'])->name('social.google');
Route::get('/login/google/callback', [LoginController::class,'handleGoogleCallback']);

Route::get('/student/register',[RegisterController::class,'showStudentRegistrationForm'])->name('student.register')->middleware('guest');
Route::post('/register',[RegisterController::class,'register'])->middleware('guest');
Route::view('/logged','auth.loginpass')->name('logged')->middleware('guest');
Route::post('/validate_otp',[ResetPasswordController::class,'checkOtp'])->name('check.otp');
Route::view('/resetPassword','auth.reset')->name('reset.password');
Route::post('/updatePassword',[ResetPasswordController::class,'updatePassword'])->name('update.password');
Route::post('/resendOtp',[ResetPasswordController::class,'resendOtp'])->name('resend.otp');
// Route::post('/logged',[LoginController::class,'logged'])->name('logged')->middleware('guest');;
Route::view('/','welcome');
Route::view('/tutor','frontend.tutor');
Route::view('/student','frontend.student');
Route::view('/subject','frontend.subject');
Route::view('/course','frontend.course');

/*
|--------------------------------------------------------------------------
| Ajax Calls Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/universities',[GeneralController::class,'university']);
Route::post('/checkEmail',[GeneralController::class,'isEmailTaken'])->name('available.email');


/*
|--------------------------------------------------------------------------
| Api Calls Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
