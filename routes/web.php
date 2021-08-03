<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TutorController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;

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
});
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();
Route::view('/','welcome');
Route::view('/tutor','frontend.tutor');
Route::view('/student','frontend.student');
Route::view('/subject','frontend.subject');
Route::view('/course','frontend.course');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
