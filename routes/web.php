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

Route::get('employee/create','EmployeeController@create');
Route::get('employee/read','EmployeeController@read');
Route::get('employee/edit/{id}','EmployeeController@edit');
Route::get('employee/delete/{id}','EmployeeController@delete');
Route::get('employee/show/{id}','EmployeeController@show');
Route::post('employee/update/{id}','EmployeeController@update');
Route::post('employee/store','EmployeeController@store');

