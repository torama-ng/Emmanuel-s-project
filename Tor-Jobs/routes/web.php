<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/profile', function (){
//     return view('pages.profile.profile');
// });
// Route::get('/jobform', 'JobFormController@index');

Route::resource('jobform', 'JobFormController');
Route::get('/search', 'JobFormController@search');
Route::get('/search', 'CompanyController@search');
Route::get('/company', 'CompanyController@index');
Route::get('/blog','PagesController@blog');
Route::get('/blog-details','PagesController@blog_details');
Route::get('/map','PagesController@resume_map');
Route::get('/home-2','PagesController@resume_home_2');
Route::get('/Candidate', function(){
    return view('Profiles.Candidate.candidate-my-profile');
});
Route::get('/Employer', function(){
    return view('Profiles.Employer.employer');
});
Route::get('/Profile','ProfileController@index');
// Route::get('/Resume_form', function(){
//     return view('resume.create');
// });
Route::resource('resume','ResumeController');

// view composer
View::composer(['*'], function($view){

    // $job = Jobs::find($id);
    // $view->with('job',$job);
    // $user = Auth::user();
    // $view->with('user',$user);
});

