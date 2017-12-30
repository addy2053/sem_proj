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

Route::get('/', function () { return view('home'); })->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::group(['middleware' => 'role:admin'], function() {

    Route::get('admin/listing', function () { return view('admin/listing'); })->name('list');
    Route::get('admin/listing/hall_listing','admin\ManageListController@index')->name('h_list');    //hall list
    Route::get('admin/listing/booked_listing','admin\MangeBookingController@index')->name('b_list');    //booked list
    Route::delete('admin/listing/{h_id}/destory','admin\ManageListController@destroy')->name('hdelete');
    Route::delete('admin/listing/{bh_id}/destory','admin\MangeBookingController@destory')->name('bdelete');
});


//user
Route::group(['middleware' => 'role:owner'], function() {

    Route::get('owner/listing', function () { return view('owner/index'); })->name('owner_list');
    Route::get('owner/listing', "owner\ManageHallListController@index")->name('owner_list');
    Route::get('owner/listing/add_hall/create',"owner\ManageHallListController@create" )->name('add_list');

    Route::post('owner/listing', "owner\ManageHallListController@store")->name('save_list');

    Route::delete('owner/booking/{id}/destroy','owner\ManagebookingListController@destroy')->name('c_booking');   //cancel booking

    Route::delete('owner/listing/{id}/destroy','owner\ManageHallListController@destroy')->name('h_delete');   //hall record dlete
    Route::get('owner/listing/{id}/edit','owner\ManageHallListController@edit')->name('h_edit');   //hall record dlete

    Route::get('owner/booking', "BookingController@index")->name('booking');


//    Route::get('contactus','contactusController@index' )->name('cont');

});

Route::group(['middleware' => 'role:owner|user'], function() {



});

Route::get('onlinebooking', function () {
    return view('onlinebooking');})->name('onlinebooking');



Route::get('BirthdayEventBooking','BirthdayEventBookingController@index')->name('BirthdayEventBooking');
Route::get('OfficeMeetings','OfficeMeetingsController@index')->name('OfficeMeetings');
Route::get('halls','hallsController@index')->name('halls');
Route::get('contactus','contactusController@index')->name('cont');
Route::get('listing/{id}/view','infocontroller@index')->name('list_view');


