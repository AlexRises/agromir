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

Route::get('/staff_add', 'StaffController@staff_add');

Route::post('/staff', 'StaffController@store');

Route::post('/staff/staff_filter', 'StaffController@staff_filter');
//Route::post('/staff_update/{id}', 'StaffController@update');

Route::get('/staff_update/{id}', 'StaffController@show')->name('showStaffProfile');

Route::post('/staff/{id}', 'StaffController@destroy')->name('deleteStaffProfile');

Route::post('/staff_update', 'StaffController@update')->name('storeUpdateStaff');

//Route::get('/staff_update', 'StaffController@show');



Route::get('/login', 'StaffController@__construct');

Route::get('/technic', 'TechnicController@index');

Route::post('/technic/branch_filter', 'TechnicController@branch_filter');

Route::post('/technic/gps_filter', 'TechnicController@gps_filter');

Route::post('/technic/dut_filter', 'TechnicController@dut_filter');

Route::post('/technic/drt_filter', 'TechnicController@drt_filter');

Route::post('/technic/technic_filter', 'TechnicController@technic_filter');

Route::get('/invoice', 'InvoiceController@index');

Route::get('/products', 'ProductsController@index');

Route::post('/products/products_branch_filter', 'ProductsController@products_branch_filter');

Route::get('/plant_culture', 'Plant_CulturesController@index');

Route::get('/prod_plant_culture', 'Product_Plant_CulturesController@index');

Route::get('/invoice_add', 'InvoiceProductsController@index');

Route::get('/new_invoice', 'InvoiceController@newinvoice');

Route::post('/new_invoice', 'InvoiceController@store');

Route::post('/invoice_add', 'InvoiceProductsController@store');

Route::get('/predict', 'Product_Plant_CulturesController@predindex');

Route::post('/prod_plant_culture/culture_filter', 'Product_Plant_CulturesController@culture_filter');

Route::post('/predict/result', 'Product_Plant_CulturesController@result');

Route::get('/predict/result', 'Product_Plant_CulturesController@result');

Route::get('/register', 'RegistrationController@index');



Route::post('/register', 'RegistrationController@store');
Auth::routes();

Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LoginController@destroy');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/crop_rotation_kherson', 'Crop_RotationController@index');

Route::post('/crop_rotation_kherson/crop_rotation_kherson_report', 'Crop_RotationController@crop_rotation_filter');

Route::get('/crop_rotation_kherson_report', 'Crop_RotationController@crop_rotation_filter');

Route::post('/crop_rotation_kherson_report/crop_rotation_kherson_report_by_culture', 'Crop_RotationController@crop_rotation_filter_by_culture');

Route::get('/crop_rotation_kherson_report_by_culture', 'Crop_RotationController@crop_rotation_filter_by_culture');

Route::get('/crop_rotation_kherson_report_chart', 'Crop_RotationController@Chartjs');

Route::post('/crop_rotation_kherson_report/crop_rotation_kherson_report_chart', 'Crop_RotationController@Chartjs');