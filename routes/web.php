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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cari-lapangan', function () {
    return view('cari-lapangan');
});


Route::get('/cek-pemesanan', function () {
    return view('cek-pemesanan');
});

Route::get('/lihat-pesanan', function () {
    return view('lihat-pesanan');
});

Auth::routes();

// AUTH MIDDLEWARE
Route::group(['middleware'=> ['auth']], function(){

Route::get('admin/', 'AppController@indexAdmin');

Route::resource('admin/shift', 'ShiftController', [
	'except' => ['create']
]);
Route::get('api/shift', 'ShiftController@apiShift')->name('api.shift');


Route::resource('admin/booking', 'BookingController', [
	'except' => ['create']
]);
Route::get('api/booking', 'BookingController@apiBooking')->name('api.booking');


});
