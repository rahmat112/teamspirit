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

//dashboard relawan
Route::get('/tim','relawanController@lihatTim')->middleware('auth');
Route::get('/mobilisasi','relawanController@lihatMobilisasi')->middleware('auth');
Route::get('/laporan','relawanController@laporan')->middleware('auth');
Route::post('/laporan','relawanController@isiLaporan')->middleware('auth');

//admin lihat relawan

Route::get('admin/relawan','adminController@daftarRelawan');
Route::post('admin/relawan','adminController@daftarRelawan');
//Route::post('admin/relawan', 'adminController@masukTim');
Route::get('admin/laporan','adminController@lihatLaporan');
// admin tim

//Route::get('admin/tim','timController@tim');


Route::get('admin/tim/data','timController@showTim');
Route::post('admin/tim/data', 'timController@pilihKetua');

Route::resource('admin/tim','timController');


// login user
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
Route::post('dashboard', 'relawanController@update');

//mobilisasi
Route::post('/admin/mobilisasi/kirimtim','mobilisasiController@tambah');
Route::get('/admin/mobilisasi/posko','mobilisasiController@posko');
Route::get('/admin/mobilisasi/kirimtim','mobilisasiController@kirimtim');
Route::resource('/admin/mobilisasi','mobilisasiController');



//loginadmin
Route::get('/admin/dashboard', 'adminController@index');
Route::get('/admin', 'adminController@login');
Route::post('/loginPost', 'adminController@loginPost');
Route::get('/logout','adminController@logout');
Route::get('auth/register', 'ajaxController@index');
Route::post('select-ajax',['as'=>'select-ajax','uses'=>'ajaxController@selectAjax']);
//end login admin