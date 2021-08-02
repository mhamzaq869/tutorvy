<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\HomeController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::view('/admins','admin.login');
Route::post('admin/login',[AdminLogin::class,'login'])->name('admin.login');
Route::get('admin/logout',[AdminLogin::class,'logout'])->name('admin.logout');
Route::group(['prefix' => '/admins','middleware' => ['auth']],function () {
    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
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
