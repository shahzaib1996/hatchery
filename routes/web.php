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
	Route::get('/', 'StaffController@index');
	Route::get('/add-staff', 'StaffController@add');
	Route::post('/add-staff-post', 'StaffController@addPost');
	Route::get('/delete-staff/{id}', 'StaffController@delete');
	Route::get('/edit-staff/{id}', 'StaffController@edit');
	Route::post('/edit-staff-post', 'StaffController@editPost');
	Route::get('/change-status-staff/{id}', 'StaffController@changeStatus');
	Route::get('/view-staff/{id}', 'StaffController@view');
});
