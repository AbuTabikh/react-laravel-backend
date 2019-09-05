<?php

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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
 	Route::patch('update', 'AuthController@update');
    Route::post('register', 'AuthController@register');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


    Route::apiResource('products', 'API\ProductController');
    Route::apiResource('semesters', 'API\SemesterController');
    Route::apiResource('programmes', 'API\ProgrammeController');
    Route::apiResource('courses', 'API\CourseController');
    Route::get('semesters/modules/{id}', 'API\SemesterController@modules');
    Route::post('grades', 'API\GradeController');


});
 
