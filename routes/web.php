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
    return view('home');
});


Route::get('onlinebooking', function () {
    return view('onlinebooking');
});

Route::get('halls', function () {
    return view('halls');
});

Route::get('BirthdayEventBooking', function () {
    return view('BirthdayEventBooking');
});

Route::get('OfficeMeetings', function () {
    return view('OfficeMeetings');
});

Route::get('listing', function () {
    return view('listing');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::post('feedback','feedbackcontroller@store')->name('feedback');
