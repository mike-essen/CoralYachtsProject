<?php



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
