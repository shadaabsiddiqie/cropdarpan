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
    $locales = config()->get('locales');
    return view('views.welcome', compact('locales'));
});

Route::get('/expert', function () {
    $locales = config()->get('locales');
    return view('views.expert', compact('locales'));
})->name('expert');

Route::get('locale/{locale}', function ($locale) {
    if (array_key_exists($locale, config()->get('locales'))) {
        session()->put('app_locale', $locale);
    }
    return redirect()->back();
})->name('locale.switch');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
