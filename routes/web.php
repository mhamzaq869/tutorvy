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
use App\Http\Controllers\Student\BookingController as StudentBookingController;
use App\Http\Controllers\Tutor\CalendarController;
use App\Http\Controllers\Tutor\ClassController;
use App\Http\Controllers\Tutor\SubjectController as TutorSubjectController;
use App\Http\Controllers\Tutor\CourseController as TutorCourseController;
use App\Http\Controllers\Tutor\HistoryController;
use App\Http\Controllers\Tutor\PaymentController;
use App\Http\Controllers\Tutor\SettingController as TutorSettingController;
use App\Http\Controllers\Tutor\AssessmentController;
use App\Http\Controllers\Tutor\ProfileController;
use App\Http\Controllers\Student\HomeController as StudentHomeController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use App\Http\Controllers\Student\TutorController as StudentTutorController;
use App\Http\Controllers\Tutor\ChatController;
use App\Http\Controllers\Student\ChatController as StdChatController;
use App\Http\Controllers\General\GenChatController;
use App\Http\Controllers\Frontend\TutorController as FrontTutorController;


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
    Route::get('/tutor/profile/{id}',[TutorController::class,'profile'])->name('admin.tutorProfile');
    Route::get('/tutor/{id}/subjects/',[TutorController::class,'subjects'])->name('admin.tutorSubjects');

    Route::get('tutor/request/{id}/{assess_id}',[TutorController::class,'tutorRequest'])->name('admin.tutorRequest');
    Route::get('tutor/assessment/{assessment_id}',[TutorController::class,'tutorAssessment'])->name('admin.tutotAssessment');
    Route::post('tutor/verify-assessment',[TutorController::class,'verifyAssessment'])->name('admin.verifyAssessment');
    Route::post('tutor/verify-tutor',[TutorController::class,'verifyTutor'])->name('admin.verifyTutor');
    Route::post('tutor/change-tutor-status',[TutorController::class,'tutorStatus'])->name('admin.tutorStatus');


    Route::get('/student',[StudentController::class,'index'])->name('admin.student');
    Route::get('/student/profile/{id}',[StudentController::class,'profile'])->name('admin.studentProfile');

    Route::get('/course',[CourseController::class,'index'])->name('admin.course');
    Route::get('/course-request/{id}',[CourseController::class,'courseRequest'])->name('admin.course-request');
    Route::get('/course-profile',[CourseController::class,'courseProfile'])->name('admin.course-profile');
    Route::get('/course-edit',[CourseController::class,'editCourseProfile'])->name('admin.course-edit');
    Route::get('/subject',[SubjectController::class,'index'])->name('admin.subject');
    Route::get('/website',[WebsiteController::class,'index'])->name('admin.website');
    Route::get('/report',[ReportController::class,'index'])->name('admin.report');
    Route::get('/integration',[IntegrationController::class,'index'])->name('admin.integration');

    Route::get('/staff',[StaffController::class,'index'])->name('admin.staff');
    Route::post('/staff/insert',[StaffController::class,'insertStaff'])->name('admin.insertStaff');
    Route::get('/staff/profile/{id}',[StaffController::class,'staffProfile'])->name('admin.staffProfile');

    Route::get('/role',[StaffController::class,'role'])->name('admin.role');
    Route::post('/role/insert-role',[StaffController::class,'insertRole'])->name('admin.insertRole');
    Route::post('/role/delete-role',[StaffController::class,'deleteRole'])->name('admin.deleteRole');



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
    Route::get('/chat',[ChatController::class,'index'])->name('tutor.chat');
    Route::get('/classroom',[ClassController::class,'index'])->name('tutor.classroom');
    Route::get('/calendar',[CalendarController::class,'index'])->name('tutor.calendar');
    Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/subjects',[TutorSubjectController::class,'index'])->name('tutor.subject');
    Route::get('/removesubjects/{id}',[TutorSubjectController::class,'destroy'])->name('tutor.remove.subject');
    Route::get('/settings',[TutorSettingController::class,'index'])->name('tutor.settings');
    Route::view('/skip','tutor.skip')->name('skip');
    Route::get('/assessment/{id}',[AssessmentController::class,'index'])->name('tutor.test');
    Route::post('/assessment',[AssessmentController::class,'store'])->name('tutor.assessment');

    //Course CRUD
    Route::get('/course',[TutorCourseController::class,'index'])->name('tutor.course');
    Route::get('/addcourse', [TutorCourseController::class,'create'])->name('tutor.addcourse');
    Route::post('/srtorecourse', [TutorCourseController::class,'store'])->name('tutor.storecourse');
    Route::get('/course/{id}/edit', [TutorCourseController::class,'edit'])->name('tutor.course.edit');
    Route::post('/course/{id}/update', [TutorCourseController::class,'update'])->name('tutor.course.update');

    //Profile Routes
    Route::get('/profile',[ProfileController::class,'index'])->name('tutor.profile');
    Route::post('/updateprofile/{id}',[ProfileController::class,'profileUpdate'])->name('tutor.profile.update');
    Route::post('/updateedu/{id}',[ProfileController::class,'profileUpdate'])->name('tutor.profile.edu');
    Route::post('/updateprofession/{id}',[ProfileController::class,'profileUpdate'])->name('tutor.profile.profession');

});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => '/general','middleware' => ['auth']],function () {

    Route::post('chat/store',[GenChatController::class,'sendMessage'])->name('store.text');
    Route::get('chat/user/talk/{id}',[GenChatController::class,'messages_between'])->name('user.chat');

});

Route::group(['prefix' => '/student','middleware' => ['auth','student']],function () {

    Route::get('/dashboard',[StudentHomeController::class,'index'])->name('student.dashboard');
    Route::get('/chat',[StdChatController::class,'index'])->name('student.chat');

    //Bookings
    Route::get('/bookings',[StudentBookingController::class,'index'])->name('student.bookings');
    Route::get('/book-now',[StudentBookingController::class,'bookNow'])->name('student.book-now');
    Route::get('/booking/{id}/tutor',[StudentBookingController::class,'directBooking'])->name('student.direct.booking');
    Route::post('/booked',[StudentBookingController::class,'booked'])->name('student.booked.tutor');
    // Route::get('/classroom',[ClassController::class,'index'])->name('tutor.classroom');
    // Route::get('/calendar',[CalendarController::class,'index'])->name('tutor.calendar');
    // Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    // Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/tutor',[StudentTutorController::class,'index'])->name('student.tutor');
    Route::get('/viewtutor/{id}',[StudentTutorController::class,'show'])->name('student.tutor.show');
    Route::get('/tutorfilter/{id?}',[StudentTutorController::class,'filter'])->name('student.tutor.filter');
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
//Reset Password
Route::post('/validate_otp',[ResetPasswordController::class,'checkOtp'])->name('check.otp');
Route::view('/resetPassword','auth.reset')->name('reset.password');
Route::post('/updatePassword',[ResetPasswordController::class,'updatePassword'])->name('update.password');
Route::post('/resendOtp',[ResetPasswordController::class,'resendOtp'])->name('resend.otp');


Route::view('/','welcome');
Route::view('/role','role');
Route::get('/register_role',[GeneralController  ::class,'loginOnRole'])->name('register.role');
Route::view('/tutor','frontend.tutor');
Route::view('/student','frontend.student');
Route::view('/subject','frontend.subject');
Route::view('/course','frontend.course');
Route::get('/findtutor',[FrontTutorController::class,'index']);
Route::post('/findtutor',[FrontTutorController::class,'filterTutor'])->name('find.tutor');

/*
|--------------------------------------------------------------------------
| Ajax Calls Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/universities',[GeneralController::class,'university'])->name('uni.name');
Route::post('/checkEmail',[GeneralController::class,'isEmailTaken'])->name('available.email');


/*
|--------------------------------------------------------------------------
| Api Calls Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
