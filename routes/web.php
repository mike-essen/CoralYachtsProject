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

/*Route::view('/', 'home');
Route::view('environments', 'environments')->middleware('auth');*/

Auth::routes(/* ['register' => false] */);
Route::get('/', 'HomeController@index');

// Route for Language selection
Route::get('locale/{locale}', function ($locale) {
   Session::put('locale', $locale);
   return redirect()->back();
});


Route::resource('environments','EnvironmentController')->middleware('auth');
Route::post('environments','EnvironmentController@store')->middleware('auth');
Route::get('/moreData', 'PostController@morePosts');

Route::resource('banners','BannerController')->middleware('auth');
Route::post('banners','BannerController@store')->middleware('auth');

Route::view('contact', 'contact');
Route::view('faq', 'faq');
Route::view('users', 'users');
Route::view('booking', 'yacht-booking')->middleware('auth');;
Route::get('listing', 'ListingController@index')->middleware('auth');;
