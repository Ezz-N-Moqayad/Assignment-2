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

// Student

Route::get('student/create', 'Student\StudentController@create');
Route::post('student/store', 'Student\StudentController@store');
Route::get('student', 'Student\StudentController@index');
Route::get('student/edit/{id}', 'Student\StudentController@edit');
Route::put('student/update/{id}', 'Student\StudentController@update');
Route::post('student/delete/{id}', 'Student\StudentController@destroy');


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
Route::get('course/edit/{id}', 'Course\CourseController@edit');
Route::put('course/update/{id}', 'Course\CourseController@update');
Route::post('course/delete/{id}', 'Course\CourseController@destroy');
