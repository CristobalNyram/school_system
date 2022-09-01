<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\TalkController;
use App\Http\Controllers\SponsorController;


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


        // logbook end--------------------------------

        // users start-------------------------------------------
        Route::get('/users',[UserController::class,"index_all"])->name('users_all_index');
        Route::get('/users/create',[UserController::class,"create"])->name('user_create');
        Route::post('/users/store',[UserController::class,"store"])->name('user_store');
        Route::get('/users/update/{user_id}',[UserController::class,"update"])->name('user_update');


        // users end--------------------------------------------

         // student start-------------------------------------------
         Route::get('/student',[UserController::class,"index"])->name('student_index');


         // student end--------------------------------------------





        // menu start---------------------------------------
        Route::get('/menu',[MenuController::class,"index"])->name('menu_index');
        Route::get('/menu/create',[MenuController::class,"create"])->name('menu_create');
        Route::post('/menu/store',[MenuController::class,"store"])->name('menu_store');

        // menu end----------------------------------------

        //role start-------------------------------------------
        Route::get('/role',[RoleController::class,"index"])->name('role_index');
        Route::get('/role/create',[RoleController::class,"create"])->name('role_create');
        Route::post('/role/store',[RoleController::class,"store"])->name('role_store');
        Route::get('/role/assign/{role_id}',[RoleController::class,"assign"])->name('role_assign');
        Route::post('/role/assign_permission/',[RoleController::class,"assign_permission"])->name('role_assign_permission');

        // role end---------------------------------------------

        // courses start-----------------------------------
        Route::get('/course',[CourseController::class,"index"])->name('course_index');
        Route::get('/course/create',[CourseController::class,"create"])->name('course_create');
        Route::post('/course/store',[CourseController::class,"store"])->name('course_store');
        Route::get('/course/update/{course_id}',[CourseController::class,"update"])->name('course_update');
        Route::post('/course/edit',[CourseController::class,"edit"])->name('course_edit');
        Route::post('/course/delete/{course_id}',[CourseController::class,"delete"])->name('course_delete');

        //courses end-----------------------

        // souvenirs start---------------------
        Route::get('/souvenir',[SouvenirController::class,"index"])->name('souvenir_index');
        Route::get('/souvenir/create',[SouvenirController::class,"create"])->name('souvenir_create');
        Route::post('/souvenir/store',[SouvenirController::class,"store"])->name('souvenir_store');
        Route::get('/souvenir/update/{souvenir_id}',[SouvenirController::class,"update"])->name('souvenir_update');
        Route::post('/souvenir/edit', [SouvenirController::class, "edit"])->name('souvenir_edit');
        Route::post('/souvenir/delete/{souvenir_id}', [SouvenirController::class, "delete"])->name('souvenir_delete');
        // souvenirs end-----------------------

        // sponsor start ----------------------------------------------
        Route::get('/sponsor',[SponsorController::class,"index"])->name('sponsor_index');
        Route::get('/sponsor/create',[SponsorController::class,"create"])->name('sponsor_create');
        Route::post('/sponsor/store',[SponsorController::class,"store"])->name('sponsor_store');
        //sponsor end---------------------------------------------------

        ///speaker start-----------------------------------------------

        //speaker end----------------------------------------------------


        ///talk start------------------------------------------------------
        Route::get('/talk',[TalkController::class,"index"])->name('talk_index');
        Route::get('/talk/create',[TalkController::class,"create"])->name('talk_create');
        Route::post('/talk/store',[TalkController::class,"store"])->name('talk_store');
        Route::get('/talk/update/{talk_id}',[TalkController::class,"update"])->name('talk_update');
        Route::post('/talk/edit', [TalkController::class, "edit"])->name('talk_edit');
        Route::post('/talk/delete/{course_id}',[TalkController::class,"delete"])->name('talk_delete');

        //talk end--------------------------------------------------------



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

