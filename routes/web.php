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

Route::get('/staff', 'StaffController@index');

Route::get('/technic', 'TechnicController@index');

Route::post('/technic/branch_filter', 'TechnicController@branch_filter');

Route::post('/technic/technic_filter', 'TechnicController@technic_filter');

Route::get('/invoice', 'InvoiceController@index');
