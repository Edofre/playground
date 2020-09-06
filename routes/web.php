<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

// Personal about-me profile page
Route::get('/profile', 'Profile\ProfileController@index')->name('profile.index');

// Datatables
Route::get('/data-tables', 'DataTables\DataTableController@index')->name('data-tables.index');
Route::get('/data-tables/data', 'DataTables\DataTableController@data')->name('data-tables.data');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::resource('activities', 'ActivityController');
    // Route::resource('categories', 'CategoryController');
    // Route::resource('tags', 'TagController');
});
