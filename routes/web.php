<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages/myhome');
});

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/student', 'PagesController@student');
Route::get('/teacher', 'PagesController@teacher');
Route::get('/services', 'PagesController@services');
Route::get('/myhome', 'PagesController@myhome');



// Route::get('/layout', function () {
//     return view('pages.layout');
// });


// Route::get('/student', function () {
//     return view('pages.student');
// });
// Route::get('/teacher', function () {
//     return view('pages.teacher');
// });
// Route::get('forStudent', 'Users@forStudent');
// Route::get('forTeacher', 'Users@forTeacher');
// Route::post('loginsubmit', 'Users@loginsubmit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');
//Route::post('/create', 'PostsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
