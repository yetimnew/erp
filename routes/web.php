<?php
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

// Route::get('/truck/{id}', 'operation\TruckController@index');
