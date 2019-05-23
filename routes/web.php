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
Route::get('/accessories-list', 'AccessoriesListController@index')->name('accessories-list');
Route::post('/accessories/add', 'AccessoriesListController@store')->name('add-accessories');


Route::get('/accessories-category', 'AccessoriesCategoryController@index')->name('accessories-category');
Route::post('/create/category', 'AccessoriesCategoryController@create')->name('category-create');
//Route::post('/store/category', 'AccessoriesCategoryController@store')->name('accessories-category');
Route::get('/edit/category/{id}', 'AccessoriesCategoryController@edit')->name('edit-category');
Route::post('/update/category', 'AccessoriesCategoryController@update')->name('category-update');
Route::get('/delete/category/{id}', 'AccessoriesCategoryController@delete')->name('delete-category');


Route::get('/quantity', 'QuantityController@index')->name('quantity');
Route::post('/quantity/add', 'QuantityController@store')->name('add-quantity');
Route::get('/quantity/edit/{id}', 'QuantityController@edit')->name('edit-quantity');
Route::post('/quantity/update', 'QuantityController@update')->name('update-quantity');
Route::get('/quantity/delete/{id}', 'QuantityController@delete')->name('delete-quantity');




Route::get('/add-company', 'CompanyController@index')->name('add-company');
Route::get('/new-info', 'CompanyController@create')->name('new-info');
Route::post('/new-company', 'CompanyController@store')->name('new-company');
//Route::get('/edit/{id}', 'CompanyController@edit')->name('edit');
Route::post('/update', 'CompanyController@update')->name('update');
Route::get('/delete/{id}', 'CompanyController@delete')->name('delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//section
Route::get('/add/section','SectionController@index')->name('index-section');
Route::post('/store/section','SectionController@store')->name('store-section');
Route::post('/view/section','SectionController@view')->name('view-section');
Route::get('/edit/section/{id}','SectionController@edit')->name('edit-section');
Route::post('/update/section','SectionController@update')->name('update-section');
Route::get('/delete/section/{id}','SectionController@destroy')->name('delete-section');

//employee
Route::get('/employee/info','EmployeeController@index')->name('index-employee');
Route::get('/add/new/employee','EmployeeController@addEmployee')->name('new-employee');
Route::post('/store/employee','EmployeeController@store')->name('store-employee');
Route::get('/view/employee','EmployeeController@index')->name('view-employee');
Route::get('/edit/employee/{id}','EmployeeController@edit')->name('edit-employee');
Route::post('/update/employee','EmployeeController@update')->name('update-employee');
Route::get('/delete/employee/{id}','EmployeeController@destroy')->name('delete-employee');

// Work Section Type
Route::get('work/station/type','WorkStationTypeController@Index')->name('work-station-type');
Route::post('add/work/station/type','WorkStationTypeController@store')->name('add-work-station-type');
Route::get('edit/work/station/type/{id}','WorkStationTypeController@edit')->name('edit-work-station-type');
Route::post('update/work/station/type','WorkStationTypeController@update')->name('update-work-station-type');
Route::get('delete/work/station/type/{id}','WorkStationTypeController@destroy')->name('delete-work-station-type');

// Work Section
Route::get('work/section','WorkSectionController@Index')->name('work-section');
Route::post('add/work/section','WorkSectionController@store')->name('add-work-section');
Route::get('edit/work/section/{id}','WorkSectionController@edit')->name('edit-add-work-section');
Route::post('update/work/section','WorkSectionController@update')->name('update-work-section');
Route::get('delete/work/section/{id}','WorkSectionController@destroy')->name('delete-work-section');

// Work type
Route::get('work/type','WorkTypeController@index')->name('work-type-index');
Route::post('add/work/type','WorkTypeController@store')->name('add-work-type');
Route::get('edit/work/type/{id}','WorkTypeController@edit')->name('edit-work-type');
Route::post('update/work/type','WorkTypeController@update')->name('update-work-type');
Route::get('delete/work/type/{id}','WorkTypeController@destroy')->name('delete-work-type');

//Worker assign
Route::get('/worker/assign','WorkerAssignController@index')->name('worker-assign');
Route::get('employee/worker/assign','WorkerAssignController@search')->name('employee-assign');
Route::post('add/worker/assign','WorkerAssignController@store')->name('add-worker-assign');



