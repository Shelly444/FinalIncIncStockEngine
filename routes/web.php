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
    return view('welcome');
});


Route::get('/accept', function () {
    return view('accept');
});


Route::get('/success', function () {
    return view('success');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/controls', function () {
    return view('control');
});


/* HOME */
Route::get('/course', function () {
    return view('/courses');
});

/* STUDENT */
Route::get('/start', function () {
    return view('studenthome');
});

Route::post('/start','StudentInfoController@addCourse');

Route::get('/redeem', function () {
    return view('/student/redeem');
});

Route::get('/student', function () {
    return view('/student/student');
});



/* PROFESSOR */
Route::get('/rewards', function () {
    return view('/instructor/rewards');
});

Route::get('/instructor', 'StudentInfoController@index');


Route::get('/purchases', function () {
    return view('/instructor/purchases');
});

Route::get('/create', function () {
    return view('/instructor/create');
});

Route::get('/event', function () {
    return view('/instructor/event');
});

/*SETUP COURSES*/

Route::get('/begin', function () { 
    return view('/instructor/setup/setupcourse');
});
Route::post('/begin','StudentInfoController@newCourse');

Route::get('/class', 'StudentInfoController@class');
Route::post('/class', 'StudentInfoController@newClass');

Route::get('/one', function () {
    return view('/instructor/setup/setupone');
});
Route::post('/one', 'StudentInfoController@student_info');

Route::get('/two', function () {
    return view('/instructor/setup/setuptwo');
});

Route::post('/two', 'StudentInfoController@newStudent');

Route::get('/three', function () {
    return view('/instructor/setup/setupthree');
});

/* ADMIN */
Route::get('/admin', function () {
    return view('/admin/admin');
});

Route::get('/accounts', 'AcceptedController@index');


Route::get('/grantaccess/{instructor}', 'AcceptedController@accept_account');

Route::post('/grantaccess/{instructor}', 'AcceptedController@instructor_accepted');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');



