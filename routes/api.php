<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', 'Api\TestController@index')
    ->name('api.test.index');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/protected/test', 'Api\TestController@protectedIndex')
        ->name('api.protected.test.index');
});