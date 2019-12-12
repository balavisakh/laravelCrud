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

//read data
Route::post('user-profile','userProfileController@userProfile');
//create data
Route::post('create-user','userProfileController@createUser');
//update data
Route::post('update-user','userProfileController@updateUser');
//delete data
Route::post('delete-user','userProfileController@deleteUser');
//login
Route::post('login','loginController@userLogin');
