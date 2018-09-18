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

Route::get('/club','clubController@club_details')->name('club_details');

route::get('/signup','registercontroller@create')->name('signup');
route::post('/user/submit/','registercontroller@store')->name('userregister');

route::get('/login','logincontroller@getloginpage')->name('getloginpage');
route::post('/user/login/submit/','logincontroller@login')->name('login');

route::get('/gamer/dashboard','dashcontroller@dashboard')->name('dashboard');
route::post('/gamer/profile/submit','dashcontroller@store')->name('storeuserprofile');

route::get('/gamer/profile','dashcontroller@profile')->name('profile');
