<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('students', 'StudentController@index');
Route::get('students/{id}', 'StudentController@show');
Route::post('students','StudentController@store');
Route::put('students/{student}','StudentController@update');
Route::delete('students/{student}','StudentController@delete');


Route::get('teachers', 'TeacherController@index');
Route::get('teachers/{id}', 'TeacherController@show');
Route::post('teachers','TeacherController@store');
Route::put('teachers/{teacher}','TeacherController@update');
Route::delete('teachers/{teacher}','TeacherController@delete');

Route::get('batch', 'BatchController@index');
Route::get('batch/{id}', 'BatchController@show');
Route::post('batch','BatchController@store');
Route::put('batch/{batch}','BatchController@update');
Route::delete('batch/{batch}','BatchController@delete');

Route::get('enrollment', 'EnrollmentController@index');
Route::get('enrollment/{id}', 'EnrollmentController@show');
Route::post('enrollment','EnrollmentController@store');
Route::put('enrollment/{enrollment}','EnrollmentController@update');
Route::delete('enrollment/{enrollment}','EnrollmentController@delete');

Route::get('holidays', 'HolidaysController@index');
Route::get('holidays/{id}', 'HolidaysController@show');
Route::post('holidays','HolidaysController@store');
Route::put('holidays/{holiday}','HolidaysController@update');
Route::delete('holidays/{holiday}','HolidaysController@delete');

Route::get('attendance', 'AttendanceController@index');
Route::get('attendance/{id}', 'AttendanceController@show');
Route::post('attendance','AttendanceController@store');
Route::put('attendance/{attendance}','AttendanceController@update');
Route::delete('attendance/{attendance}','AttendanceController@delete');