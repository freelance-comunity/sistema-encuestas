<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/posts', 'Admin\\PostsController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('school/student', 'School\\StudentController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('school/teacher', 'School\\TeacherController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/campus', 'Campus\\CampusController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/department', 'Campus\\DepartmentController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('school/school', 'School\\SchoolController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/career', 'Campus\\CareerController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/subject', 'Campus\\SubjectController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/group', 'Campus\\GroupController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/study', 'Campus\\StudyController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('campus/cycle', 'Campus\\CycleController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/user', 'Admin\\UserController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('admin/role', 'Admin\\RoleController');
});