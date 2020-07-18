<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('activities', 'ActivityController');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');
});
