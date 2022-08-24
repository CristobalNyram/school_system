<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

        //logbook start-----------------------------------------------
        Route::get('/logbook',[LogbookController::class,"index"])->name('logbook_index');
        Route::get('/role',[RoleController::class,"index"])->name('role_index');


        // logbook end--------------------------------

        // users start-------------------------------------------
        Route::get('/users',[UserController::class,"index_all"])->name('users_all_index');

        // users end--------------------------------------------

        Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
        Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
        Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
        Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
        Route::get('map', function () {return view('pages.maps');})->name('map');
        Route::get('icons', function () {return view('pages.icons');})->name('icons');
        Route::get('table-list', function () {return view('pages.tables');})->name('table');
        Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    });
});

