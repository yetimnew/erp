<?php
Auth::routes(['register' => false]);
// Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/profile', 'operation\ProfileController');
Route::resource('/user', 'UserController');
Route::resource('/personale', 'Hrm\PersonaleController');
Route::resource('/department', 'Hrm\DepartmentController');
Route::resource('/job', 'Hrm\JobController');
