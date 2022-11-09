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

// Teacher

Route::get('teacher/create', 'Teacher\TeacherController@create');
Route::post('teacher/store', 'Teacher\TeacherController@store');
Route::get('teacher', 'Teacher\TeacherController@index');
Route::get('teacher/edit/{id}', 'Teacher\TeacherController@edit');
Route::put('teacher/update/{id}', 'Teacher\TeacherController@update');
Route::post('teacher/delete/{id}', 'Teacher\TeacherController@destroy');


// Course

Route::get('course/create', 'Course\CourseController@create');
Route::post('course/store', 'Course\CourseController@store');
Route::get('course', 'Course\CourseController@index');
Route::get('course/edit/{course_number}', 'Course\CourseController@edit');
Route::put('course/update/{course_number}', 'Course\CourseController@update');
Route::post('course/delete/{course_number}', 'Course\CourseController@destroy');
