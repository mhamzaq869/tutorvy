<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\IntegrationController;
use App\Http\Controllers\Admin\KnowledgeController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\General\GeneralController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/admins',[AdminLogin::class,'index']);
Route::post('admin/login',[AdminLogin::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminLogin::class,'logout'])->name('admin.logout');

Route::group(['prefix' => '/admin','middleware' => ['auth']],function () {

    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/tutor',[TutorController::class,'index'])->name('admin.tutor');
    Route::get('/student',[StudentController::class,'index'])->name('admin.student');
    Route::get('/course',[CourseController::class,'index'])->name('admin.course');
    Route::get('/subject',[SubjectController::class,'index'])->name('admin.subject');
    Route::get('/website',[WebsiteController::class,'index'])->name('admin.website');
    Route::get('/report',[ReportController::class,'index'])->name('admin.report');
    Route::get('/integration',[IntegrationController::class,'index'])->name('admin.integration');
    Route::get('/knowledge',[KnowledgeController::class,'index'])->name('admin.knolwedge');
    Route::get('/support',[SupportController::class,'index'])->name('admin.support');
    Route::get('/setting',[SettingController::class,'index'])->name('admin.setting');
});
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
Route::view('/student/login','student.auth.login');
Route::post('/register',[RegisterController::class,'register']);
Route::view('/','welcome');
Route::view('/tutor','frontend.tutor');
Route::view('/student','frontend.student');
Route::view('/subject','frontend.subject');
Route::view('/course','frontend.course');


/*
|--------------------------------------------------------------------------
| Api Calls Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/universities',[GeneralController::class,'university']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
