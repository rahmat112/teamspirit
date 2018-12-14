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
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/confirm', function () {
    return view('relawan.confirm');
});
Route::get('/edit', function () {
    return view('relawan.edit');
});
Route::get('/test', function () {
    return view('test');
});

Auth::routes();

//admin lihat relawan

Route::get('admin/relawan','adminController@daftarRelawan');
Route::post('admin/relawan', 'relawanController@masukTim');

// admin tim

//Route::get('admin/tim','timController@tim');

Route::get('admin/tim/data','timController@showTim');

Route::resource('admin/tim','timController');


// login user
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
Route::post('dashboard', 'relawanController@update');





//loginadmin
Route::get('/admin/dashboard', 'adminController@index');
Route::get('/admin', 'adminController@login');
Route::post('/loginPost', 'adminController@loginPost');
Route::get('/logout','adminController@logout');
//end login admin