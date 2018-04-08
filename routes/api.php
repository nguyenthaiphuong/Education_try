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
Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');
Route::get('user-info', 'UserController@getUserInfo');
Route::get('list-course', 'CourseController@listCourse');
Route::get('add-course', 'CourseController@addCourse');
Route::get('list-province', 'CourseController@getProvince');
Route::get('list-class', 'CourseController@getClass');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
