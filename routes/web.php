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
Route::get('program/{name}','ProgramController@index');
Route::get('program/course/{id}', 'CourseController@index');
Route::get('program/create/new','ProgramController@create')->name('program.create');
Route::get('program/edit/{id}','ProgramController@edit')->name('program.edit');
Route::get('program/{id}/course/create','CourseController@create')->name('course.create');
Route::get('program/course/edit/{id}','CourseController@edit')->name('course.edit');
Route::post('course/save','CourseController@save')->name('saveCourse');
Route::Post('program/save','ProgramController@save')->name('saveProgram');
Route::patch('course/edit','CourseController@save')->name('editCourse');
Route::get('program/course/subject/{id}', 'SubjectController@index');
Route::get('topSubjects', 'CourseController@topSubjects');
Route::get('topPrograms', 'ProgramController@topPrograms');


Route::get('program/course/{id}/subject/create','SubjectController@create')->name('subject.create');
