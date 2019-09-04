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
Route::get('/company', 'PagesController@company');
Route::get('/company-details', 'PagesController@details');
Route::get('blog','PagesController@blog');
Route::get('blog-details','PagesController@blog_details');
Route::get('home','PagesController@resume_home');
Route::get('map','PagesController@resume_map');
Route::get('home-2','PagesController@resume_home_2');
