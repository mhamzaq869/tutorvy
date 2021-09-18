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
use App\Http\Controllers\Student\StudentClassController as StudentClassController;
use App\Http\Controllers\Student\SettingController as StudentSettingController;

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

    Route::get('tutor/request/{id}/{assess_id?}',[TutorController::class,'tutorRequest'])->name('admin.tutorRequest');
    Route::get('tutor/assessment/{assessment_id}',[TutorController::class,'tutorAssessment'])->name('admin.tutotAssessment');
    Route::get('/tutor-request/{id}',[TutorController::class,'tutor_course_Request'])->name('admin.tutor-request');
    Route::get('/tutor-profile',[TutorController::class,'tutor_course_profile'])->name('admin.tutor-profile');
    Route::get('/tutor-class',[TutorController::class,'tutor_subject_class'])->name('admin.tutor-class');
    Route::get('/all-tutor-req',[TutorController::class,'all_tutor_req'])->name('admin.all-tutor-req');
    Route::get('/all-tutors',[TutorController::class,'all_tutors'])->name('admin.all-tutors');


    Route::post('tutor/verify-assessment',[TutorController::class,'verifyAssessment'])->name('admin.verifyAssessment');
    Route::post('tutor/verify-tutor',[TutorController::class,'verifyTutor'])->name('admin.verifyTutor');
    Route::post('tutor/change-tutor-status',[TutorController::class,'tutorStatus'])->name('admin.tutorStatus');


    Route::get('/student',[StudentController::class,'index'])->name('admin.student');
    Route::get('/student/profile/{id}',[StudentController::class,'profile'])->name('admin.studentProfile');
    Route::post('student/change-student-status',[StudentController::class,'studentStatus'])->name('admin.studentStatus');
    Route::post('student/delete-student',[StudentController::class,'deleteStudent'])->name('admin.deleteStudent');


    Route::get('/course',[CourseController::class,'index'])->name('admin.course');
    Route::get('/course-request/{id}',[CourseController::class,'courseRequest'])->name('admin.course-request');
    Route::get('/course-profile/{id}',[CourseController::class,'courseProfile'])->name('admin.course-profile');
    Route::get('/course-edit',[CourseController::class,'editCourseProfile'])->name('admin.course-edit');
    Route::post('course/change-course-status',[CourseController::class,'courseStatus'])->name('admin.courseStatus');
    Route::post('course/delete-course',[CourseController::class,'deleteCourse'])->name('admin.deleteCourse');


    Route::get('/subject',[SubjectController::class,'index'])->name('admin.subject');
    Route::post('/subject/insert-subject',[SubjectController::class,'insertSubject'])->name('admin.insertSubject');
    Route::post('/subject/update-subject',[SubjectController::class,'updateSubject'])->name('admin.updateSubject');
    Route::post('/subject/delete-subject',[SubjectController::class,'deleteSubject'])->name('admin.deleteSubject');



    Route::get('/website',[WebsiteController::class,'index'])->name('admin.website');
    Route::get('/report',[ReportController::class,'index'])->name('admin.report');
    Route::get('/integration',[IntegrationController::class,'index'])->name('admin.integration');
    Route::post('/save-payal',[IntegrationController::class,'savePaypalDetails']);
    Route::post('/verify-integration',[IntegrationController::class,'verfiyIntegration']);
    Route::post('/integration-status',[IntegrationController::class,'changeIntegrationStatus']);

    Route::get('/staff',[StaffController::class,'index'])->name('admin.staff');
    Route::post('/staff/insert',[StaffController::class,'insertStaff'])->name('admin.insertStaff');
    Route::get('/staff/profile/{id}',[StaffController::class,'staffProfile'])->name('admin.staffProfile');

    Route::get('/role',[StaffController::class,'role'])->name('admin.role');
    Route::post('/role/insert-role',[StaffController::class,'insertRole'])->name('admin.insertRole');
    Route::post('/role/delete-role',[StaffController::class,'deleteRole'])->name('admin.deleteRole');
    Route::post('/role/update-role',[StaffController::class,'updateRole'])->name('admin.updateRole');



    Route::get('/knowledge',[KnowledgeController::class,'index'])->name('admin.knowledge');
    Route::get('/support',[SupportController::class,'index'])->name('admin.support');
    
    Route::get('/ticket/{id}',[SupportController::class,'ticket'])->name('admin.ticket');

    Route::get('/ticket-reply',[SupportController::class,'ticketReply'])->name('admin.ticketReply');
    Route::get('/setting',[SettingController::class,'index'])->name('admin.setting');

    Route::post('/change-password',[SettingController::class,'changePassword'])->name('admin.change.password');
    Route::post('/save-system-etting',[SettingController::class,'saveSystemSetting'])->name('admin.save.system-setting');
    // Route to get all subjects form api call

    Route::get('/api_subjects',[SubjectController::class,'getSubjectsFromApi']);

    Route::get('/category',[SupportController::class,'category'])->name('admin.category');
    Route::post('/save-category',[SupportController::class,'saveCategory'])->name('admin.save.category');
    Route::post('/delete-category',[SupportController::class,'deleteCategory'])->name('admin.delete.category');
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
    Route::get('/booking-detail/{id}',[BookingController::class,'bookingDetail'])->name('tutor.booking.detail');
    Route::get('/booking-accept/{id}',[BookingController::class,'acceptBooking'])->name('tutor.booking.accept');

    Route::get('/chat',[ChatController::class,'index'])->name('tutor.chat');
    Route::get('/classroom',[ClassController::class,'index'])->name('tutor.classroom');
    Route::get('/calendar',[CalendarController::class,'index'])->name('tutor.calendar');
    Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/subjects',[TutorSubjectController::class,'index'])->name('tutor.subject');
    Route::get('/removesubjects/{id}',[TutorSubjectController::class,'destroy'])->name('tutor.remove.subject');
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

    Route::post('/updateedu/{id}',[ProfileController::class,'updateProfileEdu'])->name('tutor.profile.edu');
    Route::post('/updateprofession/{id}',[ProfileController::class,'updateProfileProfession'])->name('tutor.profile.profession');
    Route::post('/update_verification/{id}',[ProfileController::class,'updateProfileVerfication'])->name('tutor.profile.verfication');

    Route::get('/settings',[TutorSettingController::class,'index'])->name('tutor.settings');
    Route::post('/change-password',[TutorSettingController::class,'changePassword'])->name('tutor.changePassword');

    Route::get('/call',[TutorSettingController::class,'call'])->name('tutor.call');
    Route::get('/class/{class_room_id}',[TutorSettingController::class,'start_class'])->name('tutor.start_class');

    Route::get('/whiteBoard',[TutorSettingController::class,'whiteBoard'])->name('tutor.whiteBoard');

    Route::post('/change-password',[TutorSettingController::class,'change_password'])->name('tutor.change.password');

    Route::get('/get-categories',[TutorSettingController::class,'getAllCategories'])->name('tutor.categories');
    Route::post('/save-ticket',[TutorSettingController::class,'saveTicket'])->name('tutor.save.ticket');
    
});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => '/general','middleware' => ['auth']],function () {

    Route::post('chat/store',[GenChatController::class,'sendMessage'])->name('store.text');
    Route::post('call/signal',[GenChatController::class,'sendSignal'])->name('tutor.sendsignal');
    Route::get('chat/user/talk/{id}',[GenChatController::class,'messages_between'])->name('user.chat');

});

Route::group(['prefix' => '/student','middleware' => ['auth','student']],function () {

    Route::get('/dashboard',[StudentHomeController::class,'index'])->name('student.dashboard');
    Route::get('/chat',[StdChatController::class,'index'])->name('student.chat');

    //Bookings
    Route::get('/bookings',[StudentBookingController::class,'index'])->name('student.bookings');
    Route::get('/book-now/{id}',[StudentBookingController::class,'bookNow'])->name('student.book-now');
    Route::get('/booking-detail/{id}',[StudentBookingController::class,'bookingDetail'])->name('student.booking-detail');
    Route::get('/booking/{id}/tutor',[StudentBookingController::class,'directBooking'])->name('student.direct.booking');
    Route::get('/booking/payment/{id}',[StudentBookingController::class,'bookingPayment'])->name('student.booking.payment');

    Route::get('/booking/paymentstatus',[StudentBookingController::class,'getPaymentStatus'])->name('student.paymentstatus');


    Route::post('/booked',[StudentBookingController::class,'booked'])->name('student.booked.tutor');

    Route::get('/classroom',[StudentClassController::class,'index'])->name('student.classroom');
    Route::get('/calendar',[CalendarController::class,'calendarStudent'])->name('student.calendar');
    // Route::get('/history',[HistoryController::class,'index'])->name('tutor.history');
    // Route::get('/payment',[PaymentController::class,'index'])->name('tutor.payment');
    Route::get('/tutor',[StudentTutorController::class,'index'])->name('student.tutor');
    Route::get('/viewtutor/{id}',[StudentTutorController::class,'show'])->name('student.tutor.show');
    Route::post('/tutorfilter',[StudentTutorController::class,'filterTutor'])->name('student.tutor.filter');
    Route::get('/settings',[StudentSettingController::class,'index'])->name('student.settings');

    Route::post('/change-password',[StudentSettingController::class,'change_password']);

    Route::get('/profile',[StudentProfileController::class,'index'])->name('student.profile');

    Route::get('/call',[StudentSettingController::class,'call'])->name('student.call');
    Route::get('/class/{class_room_id}',[StudentSettingController::class,'join_class'])->name('student.join_class');

    Route::get('/whiteBoard',[StudentSettingController::class,'whiteBoard'])->name('student.whiteBoard');


    Route::post('/updateprofile',[StudentProfileController::class,'profileUpdate'])->name('student.profile.update');
    Route::post('/update_education',[StudentProfileController::class,'profileEducationRecord'])->name('student.education.update');
    Route::post('/update_verification',[StudentProfileController::class,'profileVerficationRecord'])->name('student.verification.update');

    Route::get('/get-categories',[StudentSettingController::class,'getAllCategories'])->name('student.categories');
    Route::post('/save-ticket',[StudentSettingController::class,'saveTicket'])->name('student.save.ticket');

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
Route::get('/validate_email',[RegisterController::class,'validate_email'])->name('validate.email');
Route::view('/logged','auth.loginpass')->name('logged')->middleware('guest');
//Reset Password
Route::post('/validate_otp',[ResetPasswordController::class,'checkOtp'])->name('check.otp');
Route::view('/resetPassword','auth.reset')->name('reset.password');
Route::post('/updatePassword',[ResetPasswordController::class,'updatePassword'])->name('update.password');
Route::post('/resendOtp',[ResetPasswordController::class,'resendOtp'])->name('resend.otp');


Route::view('/','welcome');
Route::get('/widget',[FrontTutorController::class,'widgetTech'])->name('whiteBoard.canvas');
Route::get('/widget',[FrontTutorController::class,'widgetTech'])->name('whiteBoard.canvas');
Route::view('/role','role');
Route::get('/register_role',[GeneralController  ::class,'loginOnRole'])->name('register.role');
Route::view('/tutor','frontend.tutor');
Route::view('/student','frontend.student');
Route::view('/subject','frontend.subject');
// Route::view('/course','frontend.course');

Route::get('/course',[GeneralController::class,'course']);

Route::get('/findtutor/{subject?}',[FrontTutorController::class,'index']);
Route::post('/findtutor',[FrontTutorController::class,'filterTutor'])->name('find.tutor');
Route::get('/tutor-profile/{id}',[FrontTutorController::class,'profileTutor'])->name('profile.tutor');

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
