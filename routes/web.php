<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Auth Routes
Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

// Theme Routes
Route::get('/theme_change', function (Request $request) {
    session()->put('theme', $request->theme);
    return redirect()->back();
})->name('theme_change');

// Language Routes
Route::get('lang/change', 'LangController@change')->name('changeLang');

// Pages Routes
include 'pages.php';




/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    // Location
    Route::resource('location', 'Admin\LocationController');

    //Bbrands
    Route::resource('brand', 'Admin\BrandController');

    // Category
    Route::resource('category', 'Admin\CategoryController');
});