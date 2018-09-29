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

// Route::get('/form', 'AddressController@index');

// Route::get('/getAddress', 'AddressController@store');
//post method 
// Route::post('/getAddress', 'AddressController@store');

// 09_22
// Resource
Route::resource('/student', 'date_09_22\StudentProfileController');
