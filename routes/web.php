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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard','Admincontroller@dashboard')->name('admin.home');

Route::group(array('prefix' => 'staff'), function()
{
	Route::get('/', 'StaffController@index')->name('staff');
	Route::get('/create', 'StaffController@create')->name('staff.create');
	Route::post('/store', 'StaffController@store')->name('staff.store');
	Route::get('/delete/{id}', 'StaffController@delete')->name('staff.delete');
	Route::get('/edit/{id}', 'StaffController@edit')->name('staff.edit');
	Route::post('/update/{id}', 'StaffController@update')->name('staff.update');
	Route::get('/change-status-staff/{id}', 'StaffController@changeStatus');
	Route::get('/attendance', 'StaffController@attendance')->name('staff.attendance');
	Route::post('/mark/attendance', 'StaffController@markPresent')->name('staff.mark.present');
});


Route::get("/test",'StaffController@testView');
