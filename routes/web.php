<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/details', function () {
//    return view('pages.details');
//});
//Route::get('/details/{name}', function ($name) {
//    return view('pages.details',compact('name'));
//});
//Route::get('/details/{id}/{name}', function ($id,$name) {
//    return view('pages.details',compact('id','name'));
//});


Route::get('/', 'PagesController@index')->name('index');
Route::get('/jobs/{pag}', 'PagesController@jobs')->name('jobs');
Route::get('/details/', 'PagesController@details')->name('details');
Route::get('job/details/{id}', 'PagesController@details_with_id')->name('details_id');

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('/jobs',[\App\Http\Controllers\Admin\JobController::class,'index']);
    Route::get('/jobs/create',[\App\Http\Controllers\Admin\JobController::class,'create']);
    Route::post('/jobs/store',[\App\Http\Controllers\Admin\JobController::class,'store']);
    Route::get('/jobs/edit/{id}',[\App\Http\Controllers\Admin\JobController::class,'edit']);
    Route::put('/jobs/update/{id}',[\App\Http\Controllers\Admin\JobController::class,'update']);
    Route::get('/jobs/delete/{id}',[\App\Http\Controllers\Admin\JobController::class,'destroy']);
    Route::post('/jobs/search',[\App\Http\Controllers\Admin\JobController::class,'search'])->name('search');
    Route::get('/applicants',[\App\Http\Controllers\Admin\ApplicantController::class,'index']);

});

Route::resource('applicant', 'ApplicantController');

Route::get('/admin', function () {
    return view('auth.login');
});

//Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('/contact', [App\Http\Controllers\ContactUsFormController::class, 'createForm']);
Route::post('/contact', [App\Http\Controllers\ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
