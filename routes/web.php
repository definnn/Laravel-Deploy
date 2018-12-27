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
    return view('layouts.app');
});

Route::get('position', function () {
    // Retrieve a piece of data from the session...
    $value = session('position');

    // Specifying a default value...
    $value = session('position', 'default');

    // Store a piece of data in the session...
    session(['position' => 'value']);
});


Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('/admin/attendance','AttendanceViewController@index')->name('attendance');
	Route::get('/admin/gei','GEIViewController@index')->name('gei');
	Route::get('/admin/si','SIViewController@index')->name('si');
	Route::get('/admin/report','ReportViewController@index')->name('report');
	
});

Route::prefix('manager')->group(function() {
    Route::get('/login', 'Auth\ManagerLoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\ManagerLoginController@login')->name('manager.login.submit');
    Route::get('/dashboard', 'ManagerController@index')->name('manager.dashboard');
	Route::get('/manager/attendance','AttendanceViewController@index')->name('attendance');
	Route::get('/manager/gei','GEISumViewController@index')->name('gei');
	Route::get('/manager/si','SISUMViewController@index')->name('si');
	Route::get('/manager/report','ReportViewController@index')->name('report');
});


Route::get('dashboard', function () {
    return view('dashboard'); 
});



Auth::routes();

Route::post('/discrepancy', 'DiscrepancyViewController@show' );
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('/employee','EmpViewController@index')->name('employee');
Route::get('/attendance','AttendanceViewController@index')->name('attendance');
Route::get('/discrepancy','DiscrepancyViewController@index')->name('discrepancy.index');
Route::get('/discrepancy/{line_num}','DiscrepancyViewController@edit')->name('attendance');
Route::patch('/discrepancy/{line_num}','DiscrepancyViewController@update')->name('attendance');

Route::get('/leave','LeaveViewController@index')->name('attendance');
Route::get('/gei','GEIViewController@index')->name('gei');
Route::get('/si','SIViewController@index')->name('si');
Route::get('/report','ReportViewController@index')->name('report');
