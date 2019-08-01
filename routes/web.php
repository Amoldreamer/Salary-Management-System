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

Auth::routes();

Route::get('aboutUs1', function () {
    return view('aboutUs1');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('employee','EmployeeController@index');

Route::get('newRegister','NewRegisterController@newRegister');

Route::POST('newRegisterFinal','NewRegisterController@newRegisterFinal');

Route::GET('changePassword','auth\ChangePasswordController@changePassword');

Route::POST('changePasswordFinal','auth\ChangePasswordController@changePasswordFinal');

Route::GET('welcome1',function(){
    return view('welcome1');
});

Route::GET('cities',function(){
    return view('auth.cities');
});

Route::get('/about',function(){
    return 'about page';
});

Route::GET('viewEmployees','EmployeeController@viewEmployees');

Route::GET('editEmployees','EmployeeController@editEmployees');

Route::POST('editEmployeeFinal','EmployeeController@editEmployeeFinal');

Route::GET('deleteEmployees','EmployeeController@deleteEmployees');

Route::GET('addSalary','EmployeeController@addSalary');

Route::POST('addSalaryFinal','EmployeeController@addSalaryFinal');

Route::GET('viewSalaries','EmployeeController@viewSalaries');

Route::GET('salarySlip','EmployeeController@salarySlip');

Route::POST('displaySalarySlips','EmployeeController@displaySalarySlips');