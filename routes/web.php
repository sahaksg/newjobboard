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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class,'index']);

});

Route::resource('applicant', 'ApplicantController');


