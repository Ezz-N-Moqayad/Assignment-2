<?php

use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('page/dashboard');
});

Route::get('billing', function () {
    return view('page/billing');
});

Route::get('profile', function () {
    return view('page/profile');
});

Route::get('edit', function () {
    return view('page/user/edit');
});

Route::get('user/create', 'User\UserController@create');    // GET
Route::post('user/store', 'User\UserController@store');    // POST
Route::get('user', 'User\UserController@index');    // GET
Route::get('user/edit/{id}', 'User\UserController@edit');    // GET
Route::put('user/update/{id}', 'User\UserController@update');        // PUT, PATCH
Route::post('user/delete/{id}', 'User\UserController@destroy');	// DELETE
