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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('program/{name}','ProgramController@index');
Route::get('program/course/{id}', 'CourseController@index')->name('courseList');
Route::get('program/create/new','ProgramController@create')->name('program.create');
Route::get('program/edit/{id}','ProgramController@edit')->name('program.edit');
Route::get('program/{id}/course/create','CourseController@create')->name('course.create');
Route::get('program/course/edit/{id}','CourseController@edit')->name('course.edit');
Route::post('course/save','CourseController@save')->name('saveCourse');
Route::Post('program/save','ProgramController@save')->name('saveProgram');
Route::patch('course/edit','CourseController@save')->name('editCourse');
Route::get('program/course/subject/{id}', 'SubjectController@index')->name('subjectsList');
Route::get('topSubjects', 'CourseController@topSubjects');
Route::get('topPrograms', 'ProgramController@topPrograms');
Route::get('program/course/{id}/subject/create','SubjectController@create')->name('subject.create');
Route::get('program/course/subject/edit/{id}','SubjectController@edit')->name('subject.edit');
Route::post('subject/save','SubjectController@save')->name('saveSubject');
Route::patch('subject/edit','SubjectController@save')->name('editSubject');
Route::get('program/course/subject/{id}/content/create','ContentController@create')->name('content.create');
Route::get('program/course/subject/content/edit/{id}','ContentController@edit')->name('content.edit');
Route::post('content/save','ContentController@save')->name('saveContent');
Route::patch('content/edit','ContentController@save')->name('editContent');
Route::get('program/course/subject/content/{id}','PostController@index')->name('contentPost');
Route::get('program/course/subject/content/{id}/post/create','PostController@create')->name('post.create');
Route::get('program/course/subject/content/post/edit/{id}','PostController@edit')->name('post.edit');
Route::post('post/save','PostController@save')->name('savePost');
Route::patch('post/edit','PostController@save')->name('editPost');
Route::get('program/course/{id}/enroll','EnrollmentController@index')->name('enroll');
Route::post('course/enrole','EnrollmentController@enroll')->name('enrollCourse');




