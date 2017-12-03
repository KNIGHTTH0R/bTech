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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return redirect()->route('profile', ['id' => auth()->user()->id]);
    })->name('home');

    Route::group(['prefix' => 'user'], function () {

        Route::get('/{id}', 'ProfileController@index')->name('profile');

    });


});

Auth::routes();