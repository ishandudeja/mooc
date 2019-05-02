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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('program/{name}', function($name) {
    $program = mooc\Programs::with('courses')
        ->whereName(urldecode($name))
        ->first();
    return view('course.program')
        ->with('program', $program)
        ->with('courses', $program->courses);
});



Route::get('program/course/{id}', function($id) {
    $course = mooc\Courses::with('subjects')->find($id)->first();
    return view('course.course')
        ->with('course',$course)
        ->with('subjects', $course->subjects);
});


Route::get('program/create/new',function (){
   return view('course.programView');
});
Route::get('program/edit/{id}',function (){
    return view('course.programView');
});
Route::get('program/{id}/course/create',function (){
    return view('course.courseView');
});

Route::get('program/course/edit/{id}',function (){
    return view('course.courseView');
});
