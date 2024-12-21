<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    /* Components */
    Route::get('/buttons', function () {
        return view('components.buttons');
    });

    Route::get('/cards', function () {
        return view('components.cards');
    });

    Route::get('/alerts', function () {
        return view('components.alerts');
    });

    Route::get('/models', function () {
        return view('components.models');
    });

    /* Utilities */
    Route::get('/colors', function () {
        return view('utilities.colors');
    });

    Route::get('/borders', function () {
        return view('utilities.borders');
    });

    Route::get('/animations', function () {
        return view('utilities.animations');
    });

    Route::get('/other', function () {
        return view('utilities.other');
    });

    /* Pages */
    Route::get('/signin', function () {
        return view('pages.signin');
    });

    Route::get('/signup', function () {
        return view('pages.signup');
    });

    Route::get('/forgot-password', function () {
        return view('pages.forgot-password');
    });

    Route::get('/404', function () {
        return view('pages.404');
    });

    Route::get('/blank', function () {
        return view('pages.blank');
    });

    Route::get('/profile', function () {/* Step 2: Adding a Page - Profile::RouteDefining */
        return view('pages.profile');
    });

    Route::get('/charts', function () {
        return view('charts.charts');
    });

    Route::get('/tables', function () {
        return view('tables.tables');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
