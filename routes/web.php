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
use App\Http\Controllers\PackageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeWebController;
use App\Http\Controllers\ExampleController;


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
    return view('home_page.index');
});

Route::prefix('web')->group(function () {
    Route::get('/',[HomeWebController::class, 'index'])->name('home_page_index');
    Route::get('/sponsor',[HomeWebController::class, 'sponsor'])->name('home_page_sponsor');
    Route::get('/course',[HomeWebController::class, 'course'])->name('home_page_course');
    Route::get('/conference',[HomeWebController::class, 'conference'])->name('home_page_conference');
    Route::get('/souvenir',[HomeWebController::class, 'souvenir'])->name('home_page_souvenir');
    Route::get('/login',[HomeWebController::class, 'login'])->name('home_page_login');


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
         Route::get('/student',[StudentController::class,"index"])->name('student_index');
         Route::get('/student/create',[StudentController::class,"create"])->name('student_create');
         Route::post('/student/store',[StudentController::class,"store"])->name('student_store');
         Route::get('/student/update/{user_id}',[StudentController::class,"update"])->name('student_update');
         Route::post('/student/edit',[StudentController::class,"edit"])->name('student_edit');
         Route::post('/student/delete/{user_id}',[StudentController::class,"delete"])->name('student_delete');


         // student end--------------------------------------------

         // Example start------------------------------------------
         Route::get('/example',[ExampleController::class,"index"])->name('example_index');

         //Example end---------------------------------------------

         // password start-------------------------------------------
         Route::get('/password/update/{user_id}',[PasswordController::class,"update"])->name('password_update');
         Route::post('/password/edit',[PasswordController::class,"edit"])->name('password_edit');

         // password end--------------------------------------------

           // speaker start-------------------------------------------
           Route::get('/speaker',[SpeakerController::class,"index"])->name('speaker_index');
           Route::get('/speaker/create',[SpeakerController::class,"create"])->name('speaker_create');
           Route::post('/speaker/store',[SpeakerController::class,"store"])->name('speaker_store');
           Route::get('/speaker/update/{user_id}',[SpeakerController::class,"update"])->name('speaker_update');
           Route::post('/speaker/edit',[SpeakerController::class,"edit"])->name('speaker_edit');
           Route::post('/speaker/delete/{user_id}',[SpeakerController::class,"delete"])->name('speaker_delete');

           // speaker end--------------------------------------------

           // payment start--------------------------------------------

           Route::get('/payments',[PaymentController::class,"index"])->name('payment_index');
           // payment end--------------------------------------------

            // setting start--------------------------------------------

            Route::get('/setting',[SettingController::class,"index"])->name('setting_index');
            Route::get('/setting/update/{setting_id}',[SettingController::class,"update"])->name('setting_update');
            Route::post('/setting/edit',[SettingController::class,"edit"])->name('setting_edit');
            


             // setting end--------------------------------------------





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
        Route::get('/sponsor/update/{sponsor_id}',[SponsorController::class,"update"])->name('sponsor_update');
        Route::post('/sponsor/edit', [SponsorController::class, "edit"])->name('sponsor_edit');
        Route::post('/sponsor/delete/{sponsor_id}', [SponsorController::class, "delete"])->name('sponsor_delete');
        //sponsor end---------------------------------------------------

        //package start------------------------------------------------
        Route::get('/package',[PackageController::class,"index"])->name('package_index');
        Route::get('/package/create',[PackageController::class,"create"])->name('package_create');
        Route::post('/package/store',[PackageController::class,"store"])->name('package_store');
        Route::get('/package/update/{package_id}',[PackageController::class,"update"])->name('package_update');
        Route::post('/package/edit', [PackageController::class, "edit"])->name('package_edit');
        Route::post('/package/delete/{package_id}', [PackageController::class, "delete"])->name('package_delete');
        //package end---------------------------------------------------

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

       //studen start-------------------------------------------------


       //studen end---------------------------------------------------

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

